<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display the dynamic blog list with category filter and search.
     */
    public function index(Request $request)
    {
        $query = Blog::with('category')->published();

        // Filter by category slug or ID
        $activeCategory = null;
        if ($request->filled('category')) {
            $catSlug = $request->category;
            $activeCategory = Category::where('slug', $catSlug)->first();
            if ($activeCategory) {
                $query->where('category_id', $activeCategory->id);
            }
        }

        // Search in title, short_description or content
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('short_description', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $blogs = $query->latest()->paginate(6)->withQueryString();
        $categories = Category::active()->withCount(['blogs' => function ($q) {
            $q->where('status', true);
        }])->get();

        return view('frontend.blog', compact('blogs', 'categories', 'activeCategory'));
    }

    /**
     * Display a single dynamic blog post.
     */
    public function show($slug)
    {
        $blog = Blog::with('category')->where('slug', $slug)->published()->firstOrFail();

        // Latest articles across all categories (excluding current post)
        $latestBlogs = Blog::with('category')
            ->published()
            ->where('id', '!=', $blog->id)
            ->latest()
            ->take(4)
            ->get();

        // Related blogs from the same category (excluding current and already listed in latest)
        $relatedBlogs = Blog::with('category')
            ->published()
            ->where('id', '!=', $blog->id)
            ->whereNotIn('id', $latestBlogs->pluck('id'))
            ->when($blog->category_id, function ($q) use ($blog) {
                $q->where('category_id', $blog->category_id);
            })
            ->latest()
            ->take(3)
            ->get();

        $categories = Category::active()->withCount(['blogs' => function ($q) {
            $q->where('status', true);
        }])->get();

        $prevBlog = Blog::published()->where('id', '<', $blog->id)->orderBy('id', 'desc')->first();
        $nextBlog = Blog::published()->where('id', '>', $blog->id)->orderBy('id', 'asc')->first();
        $readingTime = max(1, (int) ceil(str_word_count(strip_tags($blog->content)) / 200));

        return view('frontend.blog-single', compact(
            'blog',
            'latestBlogs',
            'relatedBlogs',
            'categories',
            'prevBlog',
            'nextBlog',
            'readingTime'
        ));
    }
}

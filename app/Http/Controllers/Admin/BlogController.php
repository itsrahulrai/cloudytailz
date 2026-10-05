<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of blogs.
     */
    public function index(Request $request)
    {
        $query = Blog::with('category');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('slug', 'like', "%{$search}%")
                  ->orWhere('author', 'like', "%{$search}%")
                  ->orWhere('short_description', 'like', "%{$search}%");
            });
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status == '1');
        }

        $blogs = $query->latest()->paginate(10)->withQueryString();
        $categories = Category::orderBy('name')->get();

        $stats = [
            'total'     => Blog::count(),
            'published' => Blog::where('status', true)->count(),
            'draft'     => Blog::where('status', false)->count(),
        ];

        return view('admin.blogs.index', compact('blogs', 'categories', 'stats'));
    }

    /**
     * Show the form for creating a new blog.
     */
    public function create()
    {
        $categories = Category::where('status', true)->orderBy('name')->get();
        return view('admin.blogs.create', compact('categories'));
    }

    /**
     * Store a newly created blog in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'             => 'required|string|max:255',
            'category_id'       => 'required|exists:categories,id',
            'slug'              => 'nullable|string|max:255|unique:blogs,slug',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'short_description' => 'nullable|string|max:1000',
            'content'           => 'required|string',
            'author'            => 'nullable|string|max:255',
            'status'            => 'nullable|boolean',
            'meta_title'        => 'nullable|string|max:255',
            'meta_description'  => 'nullable|string|max:1000',
            'meta_keywords'     => 'nullable|string|max:500',
            'canonical_url'     => 'nullable|string|max:255',
        ]);

        // Auto-generate unique slug
        $slug = !empty($validated['slug'])
            ? Str::slug($validated['slug'])
            : Str::slug($validated['title']);

        $originalSlug = $slug;
        $counter = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$counter}";
            $counter++;
        }

        // Handle Image Upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $destination = public_path('uploads/blogs');
            if (!File::exists($destination)) {
                File::makeDirectory($destination, 0755, true);
            }
            $file->move($destination, $imageName);
        }

        Blog::create([
            'category_id'       => $validated['category_id'],
            'title'             => $validated['title'],
            'slug'              => $slug,
            'image'             => $imageName,
            'short_description' => $validated['short_description'] ?? null,
            'content'           => $validated['content'],
            'author'            => $validated['author'] ?: 'Cloudytailz',
            'status'            => $request->has('status') ? (bool) $request->status : true,
            'meta_title'        => $validated['meta_title'] ?? null,
            'meta_description'  => $validated['meta_description'] ?? null,
            'meta_keywords'     => $validated['meta_keywords'] ?? null,
            'canonical_url'     => $validated['canonical_url'] ?? null,
        ]);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog created successfully!');
    }

    /**
     * Show the form for editing the specified blog.
     */
    public function edit(Blog $blog)
    {
        $categories = Category::where('status', true)->orderBy('name')->get();
        return view('admin.blogs.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified blog in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title'             => 'required|string|max:255',
            'category_id'       => 'required|exists:categories,id',
            'slug'              => 'nullable|string|max:255|unique:blogs,slug,' . $blog->id,
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'short_description' => 'nullable|string|max:1000',
            'content'           => 'required|string',
            'author'            => 'nullable|string|max:255',
            'status'            => 'nullable|boolean',
            'meta_title'        => 'nullable|string|max:255',
            'meta_description'  => 'nullable|string|max:1000',
            'meta_keywords'     => 'nullable|string|max:500',
            'canonical_url'     => 'nullable|string|max:255',
        ]);

        // Auto-generate unique slug if changed
        $slug = !empty($validated['slug'])
            ? Str::slug($validated['slug'])
            : Str::slug($validated['title']);

        if ($slug !== $blog->slug) {
            $originalSlug = $slug;
            $counter = 1;
            while (Blog::where('slug', $slug)->where('id', '!=', $blog->id)->exists()) {
                $slug = "{$originalSlug}-{$counter}";
                $counter++;
            }
        }

        $imageName = $blog->image;
        if ($request->hasFile('image')) {
            // Delete old uploaded image if exists
            if ($blog->image && File::exists(public_path('uploads/blogs/' . $blog->image))) {
                File::delete(public_path('uploads/blogs/' . $blog->image));
            }

            $file = $request->file('image');
            $imageName = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $destination = public_path('uploads/blogs');
            if (!File::exists($destination)) {
                File::makeDirectory($destination, 0755, true);
            }
            $file->move($destination, $imageName);
        }

        $blog->update([
            'category_id'       => $validated['category_id'],
            'title'             => $validated['title'],
            'slug'              => $slug,
            'image'             => $imageName,
            'short_description' => $validated['short_description'] ?? null,
            'content'           => $validated['content'],
            'author'            => $validated['author'] ?: 'Cloudytailz',
            'status'            => $request->has('status') ? (bool) $request->status : false,
            'meta_title'        => $validated['meta_title'] ?? null,
            'meta_description'  => $validated['meta_description'] ?? null,
            'meta_keywords'     => $validated['meta_keywords'] ?? null,
            'canonical_url'     => $validated['canonical_url'] ?? null,
        ]);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog updated successfully!');
    }

    /**
     * Toggle the status between Published and Draft.
     */
    public function toggleStatus(Blog $blog)
    {
        $blog->update(['status' => !$blog->status]);
        $statusText = $blog->status ? 'published' : 'moved to drafts';

        return back()->with('success', "Blog '{$blog->title}' {$statusText} successfully!");
    }

    /**
     * Remove the specified blog from storage.
     */
    public function destroy(Blog $blog)
    {
        // Delete image file if in uploads/blogs
        if ($blog->image && File::exists(public_path('uploads/blogs/' . $blog->image))) {
            File::delete(public_path('uploads/blogs/' . $blog->image));
        }

        $title = $blog->title;
        $blog->delete();

        return redirect()->route('admin.blogs.index')
            ->with('success', "Blog '{$title}' deleted successfully!");
    }
}

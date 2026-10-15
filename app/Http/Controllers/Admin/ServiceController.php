<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    /**
     * Display a listing of services.
     */
    public function index(Request $request)
    {
        $query = Service::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('slug', 'like', "%{$search}%")
                  ->orWhere('short_description', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status == '1');
        }

        $services = $query->latest()->paginate(10)->withQueryString();

        $stats = [
            'total'     => Service::count(),
            'published' => Service::where('status', true)->count(),
            'draft'     => Service::where('status', false)->count(),
        ];

        return view('admin.services.index', compact('services', 'stats'));
    }

    /**
     * Show the form for creating a new service.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created service in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'             => 'required|string|max:255',
            'slug'              => 'nullable|string|max:255|unique:services,slug',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'icon'              => 'nullable|string|max:100',
            'short_description' => 'nullable|string|max:1000',
            'content'           => 'required|string',
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
        while (Service::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$counter}";
            $counter++;
        }

        // Handle Image Upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $destination = public_path('uploads/services');
            if (!File::exists($destination)) {
                File::makeDirectory($destination, 0755, true);
            }
            $file->move($destination, $imageName);
        }

        // Auto-generate canonical URL if empty
        $canonicalUrl = !empty($validated['canonical_url'])
            ? $validated['canonical_url']
            : route('service.detail', $slug);

        Service::create([
            'title'             => $validated['title'],
            'slug'              => $slug,
            'image'             => $imageName,
            'icon'              => $validated['icon'] ?? null,
            'short_description' => $validated['short_description'] ?? null,
            'content'           => $validated['content'],
            'status'            => $request->has('status') ? (bool) $request->status : true,
            'meta_title'        => $validated['meta_title'] ?? null,
            'meta_description'  => $validated['meta_description'] ?? null,
            'meta_keywords'     => $validated['meta_keywords'] ?? null,
            'canonical_url'     => $canonicalUrl,
        ]);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service created successfully!');
    }

    /**
     * Show the form for editing the specified service.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified service in storage.
     */
    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title'             => 'required|string|max:255',
            'slug'              => 'nullable|string|max:255|unique:services,slug,' . $service->id,
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'icon'              => 'nullable|string|max:100',
            'short_description' => 'nullable|string|max:1000',
            'content'           => 'required|string',
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

        if ($slug !== $service->slug) {
            $originalSlug = $slug;
            $counter = 1;
            while (Service::where('slug', $slug)->where('id', '!=', $service->id)->exists()) {
                $slug = "{$originalSlug}-{$counter}";
                $counter++;
            }
        }

        $imageName = $service->image;
        if ($request->hasFile('image')) {
            // Delete old uploaded image if exists
            if ($service->image && File::exists(public_path('uploads/services/' . $service->image))) {
                File::delete(public_path('uploads/services/' . $service->image));
            }

            $file = $request->file('image');
            $imageName = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $destination = public_path('uploads/services');
            if (!File::exists($destination)) {
                File::makeDirectory($destination, 0755, true);
            }
            $file->move($destination, $imageName);
        }

        // Auto-generate canonical URL if empty
        $canonicalUrl = !empty($validated['canonical_url'])
            ? $validated['canonical_url']
            : route('service.detail', $slug);

        $service->update([
            'title'             => $validated['title'],
            'slug'              => $slug,
            'image'             => $imageName,
            'icon'              => $validated['icon'] ?? null,
            'short_description' => $validated['short_description'] ?? null,
            'content'           => $validated['content'],
            'status'            => $request->has('status') ? (bool) $request->status : false,
            'meta_title'        => $validated['meta_title'] ?? null,
            'meta_description'  => $validated['meta_description'] ?? null,
            'meta_keywords'     => $validated['meta_keywords'] ?? null,
            'canonical_url'     => $canonicalUrl,
        ]);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service updated successfully!');
    }

    /**
     * Toggle the status between Published and Draft.
     */
    public function toggleStatus(Service $service)
    {
        $service->update(['status' => !$service->status]);
        $statusText = $service->status ? 'published/active' : 'moved to draft/inactive';

        return back()->with('success', "Service '{$service->title}' {$statusText} successfully!");
    }

    /**
     * Remove the specified service from storage.
     */
    public function destroy(Service $service)
    {
        // Delete image file if in uploads/services
        if ($service->image && File::exists(public_path('uploads/services/' . $service->image))) {
            File::delete(public_path('uploads/services/' . $service->image));
        }

        $title = $service->title;
        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', "Service '{$title}' deleted successfully!");
    }
}


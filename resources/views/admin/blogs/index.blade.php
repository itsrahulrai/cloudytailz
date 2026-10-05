@extends('layouts.app')
@section('title', 'All Blogs — Cloudytailz Admin')
@section('page-title', 'Blog Management')

@section('content')
    {{-- ── STATS ROW ── --}}
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="table-card p-3 d-flex align-items-center justify-content-between">
                <div>
                    <div style="font-size:12px;font-weight:700;color:#8b92a9;text-transform:uppercase;">Total Blogs</div>
                    <div style="font-size:26px;font-weight:800;color:#1a1f36;">{{ $stats['total'] }}</div>
                </div>
                <div style="width:48px;height:48px;border-radius:12px;background:#fff7ed;color:#f97316;display:flex;align-items:center;justify-content:center;font-size:22px;">
                    <i class="bi bi-journal-richtext"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="table-card p-3 d-flex align-items-center justify-content-between">
                <div>
                    <div style="font-size:12px;font-weight:700;color:#8b92a9;text-transform:uppercase;">Published Blogs</div>
                    <div style="font-size:26px;font-weight:800;color:#16a34a;">{{ $stats['published'] }}</div>
                </div>
                <div style="width:48px;height:48px;border-radius:12px;background:#dcfce7;color:#16a34a;display:flex;align-items:center;justify-content:center;font-size:22px;">
                    <i class="bi bi-check2-circle"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="table-card p-3 d-flex align-items-center justify-content-between">
                <div>
                    <div style="font-size:12px;font-weight:700;color:#8b92a9;text-transform:uppercase;">Drafts</div>
                    <div style="font-size:26px;font-weight:800;color:#dc2626;">{{ $stats['draft'] }}</div>
                </div>
                <div style="width:48px;height:48px;border-radius:12px;background:#fee2e2;color:#dc2626;display:flex;align-items:center;justify-content:center;font-size:22px;">
                    <i class="bi bi-file-earmark-text"></i>
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success d-flex align-items-center justify-content-between mb-4" style="border-radius:12px;">
            <div><i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-card">
        <div class="table-card-header d-flex flex-wrap align-items-center justify-content-between gap-3">
            <div>
                <h6 class="mb-1" style="font-weight:700;color:#1a1f36;">Articles & Stories</h6>
                <span style="font-size:12px;color:#8b92a9;">Showing {{ $blogs->firstItem() ?? 0 }} - {{ $blogs->lastItem() ?? 0 }} of {{ $blogs->total() }} blogs</span>
            </div>
            <div class="d-flex align-items-center gap-2">
                <a href="{{ route('admin.categories.index') }}" class="btn btn-sm btn-outline-secondary"
                   style="font-weight:600;padding:8px 14px;border-radius:10px;text-decoration:none;">
                    <i class="bi bi-tags me-1"></i> Manage Categories
                </a>
                <a href="{{ route('admin.blogs.create') }}" class="btn btn-sm"
                   style="background:#f97316;color:#fff;font-weight:700;padding:8px 16px;border-radius:10px;text-decoration:none;box-shadow:0 4px 12px rgba(249,115,22,0.25);">
                    <i class="bi bi-plus-lg me-1"></i> Add New Blog
                </a>
            </div>
        </div>

        {{-- Search & Filters --}}
        <div class="p-3" style="background:#fafbfc;border-bottom:1px solid #f0f2f8;">
            <form method="GET" action="{{ route('admin.blogs.index') }}" class="row g-2 align-items-center">
                <div class="col-md-4 col-sm-6">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text bg-white" style="border-radius:8px 0 0 8px;border-color:#e2e8f0;">
                            <i class="bi bi-search text-muted"></i>
                        </span>
                        <input type="text" name="search" class="form-control" placeholder="Search by title, author, slug..."
                               value="{{ request('search') }}" style="border-radius:0 8px 8px 0;border-color:#e2e8f0;">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <select name="category_id" class="form-select form-select-sm" style="border-radius:8px;border-color:#e2e8f0;">
                        <option value="">All Categories</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ request('category_id') == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 col-sm-6">
                    <select name="status" class="form-select form-select-sm" style="border-radius:8px;border-color:#e2e8f0;">
                        <option value="">All Statuses</option>
                        <option value="1" {{ request('status') === '1' ? 'selected' : '' }}>Published Only</option>
                        <option value="0" {{ request('status') === '0' ? 'selected' : '' }}>Drafts Only</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-6 d-flex gap-2">
                    <button type="submit" class="btn btn-sm btn-dark" style="border-radius:8px;font-weight:600;padding:6px 14px;">
                        Filter
                    </button>
                    @if(request()->hasAny(['search', 'category_id', 'status']))
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-sm btn-outline-secondary" style="border-radius:8px;font-weight:600;padding:6px 14px;">
                            Reset
                        </a>
                    @endif
                </div>
            </form>
        </div>

        <div class="table-responsive">
            <table class="table mb-0 align-middle">
                <thead style="background:#f8fafc;">
                    <tr>
                        <th style="font-size:11px;font-weight:700;color:#64748b;text-transform:uppercase;padding:12px 18px;">#</th>
                        <th style="font-size:11px;font-weight:700;color:#64748b;text-transform:uppercase;padding:12px 18px;">Image</th>
                        <th style="font-size:11px;font-weight:700;color:#64748b;text-transform:uppercase;padding:12px 18px;">Title & Slug</th>
                        <th style="font-size:11px;font-weight:700;color:#64748b;text-transform:uppercase;padding:12px 18px;">Category</th>
                        <th style="font-size:11px;font-weight:700;color:#64748b;text-transform:uppercase;padding:12px 18px;">Status</th>
                        <th style="font-size:11px;font-weight:700;color:#64748b;text-transform:uppercase;padding:12px 18px;">Date</th>
                        <th style="font-size:11px;font-weight:700;color:#64748b;text-transform:uppercase;padding:12px 18px;text-align:right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($blogs as $blog)
                        <tr>
                            <td style="color:#8b92a9;font-size:12px;padding:14px 18px;">{{ $blog->id }}</td>
                            <td style="padding:14px 18px;width:70px;">
                                <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}"
                                     style="width:56px;height:42px;object-fit:cover;border-radius:8px;border:1px solid #e2e8f0;">
                            </td>
                            <td style="padding:14px 18px;max-width:320px;">
                                <div style="font-weight:700;color:#1e293b;font-size:14px;line-height:1.3;" class="mb-1">
                                    {{ $blog->title }}
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <code style="font-size:11px;background:#f1f5f9;color:#0f172a;padding:2px 6px;border-radius:4px;">
                                        /{{ $blog->slug }}
                                    </code>
                                    <span style="font-size:11px;color:#8b92a9;">&bull; By {{ $blog->author }}</span>
                                </div>
                            </td>
                            <td style="padding:14px 18px;">
                                @if($blog->category)
                                    <span class="badge" style="background:#fff7ed;color:#f97316;font-size:12px;font-weight:700;padding:6px 12px;border-radius:20px;border:1px solid #fed7aa;">
                                        {{ $blog->category->name }}
                                    </span>
                                @else
                                    <span class="badge bg-light text-muted" style="font-size:11px;border-radius:20px;">Uncategorized</span>
                                @endif
                            </td>
                            <td style="padding:14px 18px;">
                                <form method="POST" action="{{ route('admin.blogs.toggle-status', $blog->id) }}" class="d-inline">
                                    @csrf @method('PATCH')
                                    <button type="submit" class="btn btn-sm p-0 border-0" title="Click to toggle status" style="background:transparent;">
                                        @if($blog->status)
                                            <span class="badge" style="background:#dcfce7;color:#15803d;font-weight:700;font-size:11px;padding:5px 10px;border-radius:20px;cursor:pointer;">
                                                <i class="bi bi-circle-fill me-1" style="font-size:7px;"></i> Published
                                            </span>
                                        @else
                                            <span class="badge" style="background:#fee2e2;color:#dc2626;font-weight:700;font-size:11px;padding:5px 10px;border-radius:20px;cursor:pointer;">
                                                <i class="bi bi-circle-fill me-1" style="font-size:7px;"></i> Draft
                                            </span>
                                        @endif
                                    </button>
                                </form>
                            </td>
                            <td style="font-size:12px;color:#8b92a9;padding:14px 18px;white-space:nowrap;">
                                {{ $blog->created_at ? $blog->created_at->format('d M Y') : '—' }}
                            </td>
                            <td style="padding:14px 18px;text-align:right;">
                                <div class="d-inline-flex gap-1 align-items-center">
                                    <a href="{{ route('blog.detail', $blog->slug) }}"
                                       target="_blank"
                                       class="btn btn-sm"
                                       title="View on site"
                                       style="background:#f4f6fb;color:#374151;font-size:11px;font-weight:700;border-radius:8px;padding:5px 10px;text-decoration:none;">
                                        <i class="bi bi-box-arrow-up-right"></i>
                                    </a>

                                    <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                       class="btn btn-sm"
                                       title="Edit Blog"
                                       style="background:#f4f6fb;color:#374151;font-size:11px;font-weight:700;border-radius:8px;padding:5px 12px;text-decoration:none;">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>

                                    <form method="POST" action="{{ route('admin.blogs.destroy', $blog->id) }}"
                                          onsubmit="return confirm('Are you sure you want to delete blog: \'{{ addslashes($blog->title) }}\'?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-sm"
                                                title="Delete Blog"
                                                style="background:#fee2e2;color:#dc2626;font-size:11px;font-weight:700;border-radius:8px;padding:5px 12px;border:none;">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-5" style="color:#8b92a9;">
                                <div class="mb-2" style="font-size:32px;">📝</div>
                                <div style="font-weight:700;color:#1e293b;">No blogs found</div>
                                <p class="mb-3" style="font-size:13px;color:#8b92a9;">Start writing captivating stories for pet parents.</p>
                                <a href="{{ route('admin.blogs.create') }}" class="btn btn-sm"
                                   style="background:#f97316;color:#fff;font-weight:700;border-radius:8px;padding:6px 16px;text-decoration:none;">
                                    + Write First Blog
                                </a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="px-4 py-3 d-flex flex-column flex-md-row align-items-center justify-content-between gap-2" style="border-top:1px solid #f0f2f8;background:#fafbfc;">
            <div style="font-size:13px;color:#64748b;">
                Showing <span style="font-weight:700;color:#0f172a;">{{ $blogs->firstItem() ?? 0 }}</span>
                to <span style="font-weight:700;color:#0f172a;">{{ $blogs->lastItem() ?? 0 }}</span>
                of <span style="font-weight:700;color:#0f172a;">{{ $blogs->total() }}</span> articles
                @if($blogs->total() > 10)
                    <span class="badge ms-2" style="background:#fff7ed;color:#ea580c;font-size:11px;">10 per page</span>
                @endif
            </div>
            @if($blogs->hasPages())
                <div>
                    {{ $blogs->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>
@endsection

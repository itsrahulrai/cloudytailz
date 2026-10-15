@extends('layouts.app')
@section('title', 'All Custom Services — Cloudytailz Admin')
@section('page-title', 'Service Management')

@section('content')
    {{-- ── STATS ROW ── --}}
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="table-card p-3 d-flex align-items-center justify-content-between">
                <div>
                    <div style="font-size:12px;font-weight:700;color:#8b92a9;text-transform:uppercase;">Total Services</div>
                    <div style="font-size:26px;font-weight:800;color:#1a1f36;">{{ $stats['total'] }}</div>
                </div>
                <div style="width:48px;height:48px;border-radius:12px;background:#fff7ed;color:#f97316;display:flex;align-items:center;justify-content:center;font-size:22px;">
                    <i class="bi bi-briefcase-fill"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="table-card p-3 d-flex align-items-center justify-content-between">
                <div>
                    <div style="font-size:12px;font-weight:700;color:#8b92a9;text-transform:uppercase;">Published Services</div>
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
                    <div style="font-size:12px;font-weight:700;color:#8b92a9;text-transform:uppercase;">Drafts / Inactive</div>
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
                <h6 class="mb-1" style="font-weight:700;color:#1a1f36;">Custom Dynamic Services</h6>
                <span style="font-size:12px;color:#8b92a9;">Showing {{ $services->firstItem() ?? 0 }} - {{ $services->lastItem() ?? 0 }} of {{ $services->total() }} services</span>
            </div>
            <div class="d-flex align-items-center gap-2">
                <a href="{{ route('admin.services.create') }}" class="btn btn-sm"
                   style="background:#f97316;color:#fff;font-weight:700;padding:8px 16px;border-radius:10px;text-decoration:none;box-shadow:0 4px 12px rgba(249,115,22,0.25);">
                    <i class="bi bi-plus-lg me-1"></i> Add New Service
                </a>
            </div>
        </div>

        {{-- Search & Filters --}}
        <div class="p-3" style="background:#fafbfc;border-bottom:1px solid #f0f2f8;">
            <form method="GET" action="{{ route('admin.services.index') }}" class="row g-2 align-items-center">
                <div class="col-md-5 col-sm-6">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text bg-white" style="border-radius:8px 0 0 8px;border-color:#e2e8f0;">
                            <i class="bi bi-search text-muted"></i>
                        </span>
                        <input type="text" name="search" class="form-control" placeholder="Search by title, slug, description..."
                               value="{{ request('search') }}" style="border-radius:0 8px 8px 0;border-color:#e2e8f0;">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <select name="status" class="form-select form-select-sm" style="border-radius:8px;border-color:#e2e8f0;">
                        <option value="">All Statuses</option>
                        <option value="1" {{ request('status') === '1' ? 'selected' : '' }}>Published Only</option>
                        <option value="0" {{ request('status') === '0' ? 'selected' : '' }}>Drafts Only</option>
                    </select>
                </div>
                <div class="col-md-4 col-sm-12 d-flex gap-2">
                    <button type="submit" class="btn btn-sm btn-dark" style="border-radius:8px;font-weight:600;padding:6px 14px;">
                        Filter
                    </button>
                    @if(request()->hasAny(['search', 'status']))
                        <a href="{{ route('admin.services.index') }}" class="btn btn-sm btn-outline-secondary" style="border-radius:8px;font-weight:600;padding:6px 14px;">
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
                        <th style="font-size:11px;font-weight:700;color:#64748b;text-transform:uppercase;padding:12px 18px;">Icon</th>
                        <th style="font-size:11px;font-weight:700;color:#64748b;text-transform:uppercase;padding:12px 18px;">Status</th>
                        <th style="font-size:11px;font-weight:700;color:#64748b;text-transform:uppercase;padding:12px 18px;">Date</th>
                        <th style="font-size:11px;font-weight:700;color:#64748b;text-transform:uppercase;padding:12px 18px;text-align:right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($services as $service)
                        <tr>
                            <td style="color:#8b92a9;font-size:12px;padding:14px 18px;">{{ $service->id }}</td>
                            <td style="padding:14px 18px;width:70px;">
                                <img src="{{ $service->image_url }}" alt="{{ $service->title }}"
                                     style="width:56px;height:42px;object-fit:cover;border-radius:8px;border:1px solid #e2e8f0;">
                            </td>
                            <td style="padding:14px 18px;max-width:320px;">
                                <div style="font-weight:700;color:#1e293b;font-size:14px;line-height:1.3;" class="mb-1">
                                    {{ $service->title }}
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <code style="font-size:11px;background:#f1f5f9;color:#0f172a;padding:2px 6px;border-radius:4px;">
                                        /service/{{ $service->slug }}
                                    </code>
                                </div>
                            </td>
                            <td style="padding:14px 18px;">
                                @if($service->icon)
                                    <span class="badge" style="background:#f1f5f9;color:#475569;font-size:12px;font-weight:600;padding:5px 10px;border-radius:8px;">
                                        <i class="{{ $service->icon }} me-1"></i> {{ $service->icon }}
                                    </span>
                                @else
                                    <span class="text-muted" style="font-size:11px;">—</span>
                                @endif
                            </td>
                            <td style="padding:14px 18px;">
                                <form method="POST" action="{{ route('admin.services.toggle-status', $service->id) }}" class="d-inline">
                                    @csrf @method('PATCH')
                                    <button type="submit" class="btn btn-sm p-0 border-0" title="Click to toggle status" style="background:transparent;">
                                        @if($service->status)
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
                                {{ $service->created_at ? $service->created_at->format('d M Y') : '—' }}
                            </td>
                            <td style="padding:14px 18px;text-align:right;">
                                <div class="d-inline-flex gap-1 align-items-center">
                                    <a href="{{ route('service.detail', $service->slug) }}"
                                       target="_blank"
                                       class="btn btn-sm"
                                       title="View live service page"
                                       style="background:#f4f6fb;color:#374151;font-size:11px;font-weight:700;border-radius:8px;padding:5px 10px;text-decoration:none;">
                                        <i class="bi bi-box-arrow-up-right"></i>
                                    </a>

                                    <a href="{{ route('admin.services.edit', $service->id) }}"
                                       class="btn btn-sm"
                                       title="Edit Service"
                                       style="background:#fff7ed;color:#ea580c;font-size:11px;font-weight:700;border-radius:8px;padding:5px 10px;text-decoration:none;">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <form method="POST" action="{{ route('admin.services.destroy', $service->id) }}"
                                          class="d-inline"
                                          onsubmit="return confirm('Are you sure you want to delete service \'{{ addslashes($service->title) }}\'?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="btn btn-sm"
                                                title="Delete Service"
                                                style="background:#fee2e2;color:#dc2626;font-size:11px;font-weight:700;border-radius:8px;padding:5px 10px;border:none;">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-5">
                                <div style="color:#94a3b8;font-size:36px;margin-bottom:12px;"><i class="bi bi-briefcase"></i></div>
                                <h6 style="color:#64748b;font-weight:700;">No services found</h6>
                                <p style="color:#94a3b8;font-size:13px;max-width:360px;margin:0 auto 16px;">
                                    Get started by adding your first dynamic service with rich details, images, and SEO tags.
                                </p>
                                <a href="{{ route('admin.services.create') }}" class="btn btn-sm"
                                   style="background:#f97316;color:#fff;font-weight:700;padding:8px 16px;border-radius:8px;text-decoration:none;">
                                    <i class="bi bi-plus-lg me-1"></i> Add First Service
                                </a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($services->hasPages())
            <div class="p-3 border-top d-flex justify-content-between align-items-center flex-wrap gap-2">
                <span style="font-size:12px;color:#8b92a9;">
                    Showing {{ $services->firstItem() }} to {{ $services->lastItem() }} of {{ $services->total() }} entries
                </span>
                <div>
                    {{ $services->links('pagination::bootstrap-5') }}
                </div>
            </div>
        @endif
    </div>
@endsection


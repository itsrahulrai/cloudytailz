@extends('layouts.app')
@section('title', 'Edit Category — Cloudytailz Admin')
@section('page-title', 'Edit Blog Category')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.categories.index') }}" class="btn btn-sm btn-outline-secondary" style="border-radius:8px;font-weight:600;padding:6px 14px;">
            <i class="bi bi-arrow-left me-1"></i> Back to Categories
        </a>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="table-card">
                <div class="table-card-header d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="mb-0" style="font-weight:700;color:#1a1f36;">
                            <i class="bi bi-pencil-square text-primary me-2"></i>Edit Category: {{ $category->name }}
                        </h6>
                        <span style="font-size:12px;color:#8b92a9;">ID #{{ $category->id }} &bull; Created {{ $category->created_at?->format('d M Y') }}</span>
                    </div>
                    <form method="POST" action="{{ route('admin.categories.destroy', $category->id) }}"
                          onsubmit="return confirm('Are you sure you want to delete this category?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger" style="border-radius:8px;font-weight:600;font-size:11px;">
                            <i class="bi bi-trash3 me-1"></i> Delete
                        </button>
                    </form>
                </div>

                <div class="p-4">
                    @if ($errors->any())
                        <div class="alert alert-danger mb-4" style="border-radius:12px;">
                            <div class="fw-bold mb-1"><i class="bi bi-exclamation-triangle-fill me-2"></i>Please fix the following errors:</div>
                            <ul class="mb-0 ps-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.categories.update', $category->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                                Category Name <span class="text-danger">*</span>
                            </label>
                            <input type="text"
                                   name="name"
                                   id="name"
                                   class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name', $category->name) }}"
                                   required
                                   style="border-radius:10px;padding:10px 14px;border-color:#e2e8f0;">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="slug" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                                Category Slug <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted" style="border-radius:10px 0 0 10px;font-size:13px;border-color:#e2e8f0;">
                                    blogs?category=
                                </span>
                                <input type="text"
                                       name="slug"
                                       id="slug"
                                       class="form-control @error('slug') is-invalid @enderror"
                                       value="{{ old('slug', $category->slug) }}"
                                       required
                                       style="border-radius:0 10px 10px 0;padding:10px 14px;border-color:#e2e8f0;">
                            </div>
                            @error('slug')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                            <div class="form-text" style="font-size:11px;color:#8b92a9;">Used in URLs to filter blogs by this category.</div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                                Description (Optional)
                            </label>
                            <textarea name="description"
                                      id="description"
                                      rows="3"
                                      class="form-control @error('description') is-invalid @enderror"
                                      style="border-radius:10px;padding:10px 14px;border-color:#e2e8f0;">{{ old('description', $category->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4 p-3 rounded" style="background:#f8fafc;border:1px solid #e2e8f0;">
                            <label class="form-label mb-1" style="font-weight:700;font-size:13px;color:#334155;">Status</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input"
                                       type="checkbox"
                                       role="switch"
                                       id="status"
                                       name="status"
                                       value="1"
                                       {{ old('status', $category->status) ? 'checked' : '' }}
                                       style="cursor:pointer;">
                                <label class="form-check-label ms-2" for="status" style="font-size:13px;color:#475569;cursor:pointer;">
                                    Active (Category will be available for blogs)
                                </label>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-end gap-2 pt-2" style="border-top:1px solid #f0f2f8;">
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary" style="border-radius:10px;font-weight:600;padding:8px 20px;">
                                Cancel
                            </a>
                            <button type="submit" class="btn" style="background:#f97316;color:#fff;font-weight:700;padding:8px 24px;border-radius:10px;box-shadow:0 4px 12px rgba(249,115,22,0.25);">
                                <i class="bi bi-check-lg me-1"></i> Update Category
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


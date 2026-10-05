@extends('layouts.app')
@section('title', 'Edit Blog — Cloudytailz Admin')
@section('page-title', 'Edit Blog')

@push('styles')
    <!-- Jodit Editor CSS -->
    <link rel="stylesheet" href="{{ asset_url('assets/vendor/jodit/jodit.min.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jodit/4.12.37/es2021/jodit.min.css"/>
    <style>
        .jodit-container {
            border-radius: 12px !important;
            border-color: #e2e8f0 !important;
        }
        .form-section-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.03);
            border: 1px solid #edf2f7;
            margin-bottom: 24px;
        }
        .form-section-title {
            font-size: 15px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 8px;
            padding-bottom: 12px;
            border-bottom: 1px solid #f1f5f9;
        }
        .image-preview-box {
            width: 100%;
            height: 200px;
            border: 2px dashed #cbd5e1;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: #f8fafc;
            position: relative;
        }
        .image-preview-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endpush

@section('content')
    <div class="mb-4 d-flex align-items-center justify-content-between">
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-sm btn-outline-secondary" style="border-radius:8px;font-weight:600;padding:6px 14px;">
            <i class="bi bi-arrow-left me-1"></i> Back to All Blogs
        </a>
        <div class="d-flex gap-2">
            <a href="{{ route('blog.detail', $blog->slug) }}" target="_blank" class="btn btn-sm btn-outline-primary" style="border-radius:8px;font-weight:600;padding:6px 14px;">
                <i class="bi bi-box-arrow-up-right me-1"></i> View Live Post
            </a>
            <form method="POST" action="{{ route('admin.blogs.destroy', $blog->id) }}"
                  onsubmit="return confirm('Are you sure you want to delete this blog?')">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger" style="border-radius:8px;font-weight:600;padding:6px 14px;">
                    <i class="bi bi-trash3 me-1"></i> Delete
                </button>
            </form>
        </div>
    </div>

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

    <form method="POST" action="{{ route('admin.blogs.update', $blog->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            {{-- ── LEFT COLUMN: MAIN CONTENT ── --}}
            <div class="col-lg-8">
                <div class="form-section-card">
                    <div class="form-section-title">
                        <i class="bi bi-pencil-fill text-warning"></i> General Information
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                            Blog Title <span class="text-danger">*</span>
                        </label>
                        <input type="text"
                               name="title"
                               id="title"
                               class="form-control @error('title') is-invalid @enderror"
                               value="{{ old('title', $blog->title) }}"
                               required
                               style="border-radius:10px;padding:10px 14px;border-color:#e2e8f0;font-weight:600;">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                            Blog Slug (URL Identifier) <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted" style="border-radius:10px 0 0 10px;font-size:12px;border-color:#e2e8f0;">
                                blogs/
                            </span>
                            <input type="text"
                                   name="slug"
                                   id="slug"
                                   class="form-control @error('slug') is-invalid @enderror"
                                   value="{{ old('slug', $blog->slug) }}"
                                   required
                                   style="border-radius:0 10px 10px 0;padding:10px 14px;border-color:#e2e8f0;font-size:13px;">
                        </div>
                        @error('slug')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="short_description" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                            Short Summary / Excerpt
                        </label>
                        <textarea name="short_description"
                                  id="short_description"
                                  rows="3"
                                  class="form-control @error('short_description') is-invalid @enderror"
                                  style="border-radius:10px;padding:10px 14px;border-color:#e2e8f0;">{{ old('short_description', $blog->short_description) }}</textarea>
                        @error('short_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label d-flex align-items-center justify-content-between" style="font-weight:700;font-size:13px;color:#334155;">
                            <span>Blog Full Content <span class="text-danger">*</span></span>
                           
                        </label>
                        <textarea name="content"
                                  id="content"
                                  rows="12"
                                  class="form-control @error('content') is-invalid @enderror"
                                  placeholder="Write your blog content here...">{{ old('content', $blog->content) }}</textarea>
                        @error('content')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- ── SEO METADATA SECTION ── --}}
                <div class="form-section-card">
                    <div class="form-section-title">
                        <i class="bi bi-search text-success"></i> SEO & Search Engine Optimization
                    </div>

                    <div class="mb-3">
                        <label for="meta_title" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                            Meta Title (SEO Title)
                        </label>
                        <input type="text"
                               name="meta_title"
                               id="meta_title"
                               class="form-control @error('meta_title') is-invalid @enderror"
                               value="{{ old('meta_title', $blog->meta_title) }}"
                               maxlength="255"
                               style="border-radius:10px;padding:10px 14px;border-color:#e2e8f0;">
                        <div class="form-text" style="font-size:11px;color:#8b92a9;">Recommended: 50-60 characters for optimal search snippet.</div>
                    </div>

                    <div class="mb-3">
                        <label for="meta_description" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                            Meta Description
                        </label>
                        <textarea name="meta_description"
                                  id="meta_description"
                                  rows="3"
                                  class="form-control @error('meta_description') is-invalid @enderror"
                                  style="border-radius:10px;padding:10px 14px;border-color:#e2e8f0;">{{ old('meta_description', $blog->meta_description) }}</textarea>
                        <div class="form-text" style="font-size:11px;color:#8b92a9;">Recommended: 140-160 characters for maximum search visibility.</div>
                    </div>

                    <div class="mb-3">
                        <label for="meta_keywords" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                            Meta Keywords (Comma separated)
                        </label>
                        <input type="text"
                               name="meta_keywords"
                               id="meta_keywords"
                               class="form-control @error('meta_keywords') is-invalid @enderror"
                               value="{{ old('meta_keywords', $blog->meta_keywords) }}"
                               style="border-radius:10px;padding:10px 14px;border-color:#e2e8f0;">
                    </div>

                    <div class="mb-2">
                        <label for="canonical_url" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                            Canonical URL (Optional)
                        </label>
                        <input type="url"
                               name="canonical_url"
                               id="canonical_url"
                               class="form-control @error('canonical_url') is-invalid @enderror"
                               value="{{ old('canonical_url', $blog->canonical_url) }}"
                               style="border-radius:10px;padding:10px 14px;border-color:#e2e8f0;">
                    </div>
                </div>
            </div>

            {{-- ── RIGHT COLUMN: SETTINGS & IMAGE ── --}}
            <div class="col-lg-4">
                {{-- Category & Publishing status --}}
                <div class="form-section-card">
                    <div class="form-section-title">
                        <i class="bi bi-sliders text-primary"></i> Category & Publishing
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                            Select Category <span class="text-danger">*</span>
                        </label>
                        <select name="category_id"
                                id="category_id"
                                class="form-select @error('category_id') is-invalid @enderror"
                                required
                                style="border-radius:10px;padding:10px 14px;border-color:#e2e8f0;font-weight:600;">
                            <option value="">-- Choose Category --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $blog->category_id) == $category->id ? 'selected' : '' }}>
                                    🏷️ {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                            Author Name
                        </label>
                        <input type="text"
                               name="author"
                               id="author"
                               class="form-control"
                               value="{{ old('author', $blog->author) }}"
                               style="border-radius:10px;padding:10px 14px;border-color:#e2e8f0;">
                    </div>

                    <div class="p-3 rounded mb-3" style="background:#f8fafc;border:1px solid #e2e8f0;">
                        <label class="form-label mb-1" style="font-weight:700;font-size:13px;color:#334155;">Publishing Status</label>
                        <div class="form-check form-switch mt-1">
                            <input class="form-check-input"
                                   type="checkbox"
                                   role="switch"
                                   id="status"
                                   name="status"
                                   value="1"
                                   {{ old('status', $blog->status) ? 'checked' : '' }}
                                   style="cursor:pointer;">
                            <label class="form-check-label ms-2" for="status" style="font-size:13px;color:#475569;cursor:pointer;font-weight:600;">
                                Published (Visible on website)
                            </label>
                        </div>
                    </div>

                    <div class="d-grid gap-2 pt-2">
                        <button type="submit" class="btn"
                                style="background:#f97316;color:#fff;font-weight:700;padding:12px;border-radius:10px;box-shadow:0 4px 14px rgba(249,115,22,0.3);font-size:14px;">
                            <i class="bi bi-check2-circle me-1"></i> Update Blog
                        </button>
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-secondary" style="border-radius:10px;font-weight:600;padding:10px;">
                            Cancel
                        </a>
                    </div>
                </div>

                {{-- Featured Image Box --}}
                <div class="form-section-card">
                    <div class="form-section-title">
                        <i class="bi bi-image text-danger"></i> Featured Image
                    </div>

                    <div class="mb-3">
                        <div class="image-preview-box mb-2" id="previewBox">
                            <img id="imagePreview" src="{{ $blog->image_url }}" alt="{{ $blog->title }}" style="display:block;">
                        </div>

                        <label class="form-label" style="font-size:12px;font-weight:600;color:#64748b;">
                            Change Cover Image (Leave blank to keep existing)
                        </label>
                        <input type="file"
                               name="image"
                               id="imageInput"
                               accept="image/*"
                               class="form-control @error('image') is-invalid @enderror"
                               style="border-radius:10px;font-size:12px;">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <!-- Jodit Editor JS (Local + CDN fallback) -->
    <script src="{{ asset_url('assets/vendor/jodit/jodit.min.js') }}"></script>
    <script>
        if (typeof Jodit === 'undefined') {
            document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/jodit/4.12.37/es2021/jodit.min.js"><\/script>');
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // ── Initialize Jodit WYSIWYG Editor ──
            if (typeof Jodit !== 'undefined') {
                const joditEditor = Jodit.make('#content', {
                    height: 480,
                    theme: 'default',
                    toolbarAdaptive: false,
                    uploader: {
                        insertImageAsBase64URI: true
                    },
                    buttons: [
                        'bold', 'italic', 'underline', 'strikethrough', '|',
                        'paragraph', 'font', 'fontsize', 'brush', '|',
                        'ul', 'ol', 'align', '|',
                        'image', 'table', 'link', '|',
                        'hr', 'symbol', 'eraser', '|',
                        'source', 'fullsize', 'preview'
                    ]
                });
            }

            // ── Live Image Preview ──
            const imageInput = document.getElementById('imageInput');
            const imagePreview = document.getElementById('imagePreview');

            imageInput.addEventListener('change', function () {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        imagePreview.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endpush

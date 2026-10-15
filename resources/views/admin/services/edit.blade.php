@extends('layouts.app')
@section('title', 'Edit Service — Cloudytailz Admin')
@section('page-title', 'Edit Service')

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
        <a href="{{ route('admin.services.index') }}" class="btn btn-sm btn-outline-secondary" style="border-radius:8px;font-weight:600;padding:6px 14px;">
            <i class="bi bi-arrow-left me-1"></i> Back to All Services
        </a>
        <div class="d-flex gap-2">
            <a href="{{ route('service.detail', $service->slug) }}" target="_blank" class="btn btn-sm btn-outline-primary" style="border-radius:8px;font-weight:600;padding:6px 14px;">
                <i class="bi bi-box-arrow-up-right me-1"></i> View Live Page
            </a>
            <form method="POST" action="{{ route('admin.services.destroy', $service->id) }}"
                  onsubmit="return confirm('Are you sure you want to delete this service?')">
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

    <form method="POST" action="{{ route('admin.services.update', $service->id) }}" enctype="multipart/form-data">
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
                            Service Title <span class="text-danger">*</span>
                        </label>
                        <input type="text"
                               name="title"
                               id="title"
                               class="form-control @error('title') is-invalid @enderror"
                               value="{{ old('title', $service->title) }}"
                               required
                               style="border-radius:10px;padding:10px 14px;border-color:#e2e8f0;font-weight:600;">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                            Slug (URL Identifier)
                        </label>
                        <div class="input-group">
                            <span class="input-group-text" style="background:#f8fafc;border-color:#e2e8f0;font-size:12px;color:#64748b;">
                                /service/
                            </span>
                            <input type="text"
                                   name="slug"
                                   id="slug"
                                   class="form-control @error('slug') is-invalid @enderror"
                                   value="{{ old('slug', $service->slug) }}"
                                   style="border-color:#e2e8f0;font-size:13px;">
                        </div>
                        <small class="text-muted" style="font-size:11px;">Change only if you want to update the URL address.</small>
                        @error('slug')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="icon" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                            Icon Class or Badge (Optional)
                        </label>
                        <input type="text"
                               name="icon"
                               id="icon"
                               class="form-control @error('icon') is-invalid @enderror"
                               value="{{ old('icon', $service->icon) }}"
                               placeholder="e.g. bi bi-heart-pulse-fill"
                               style="border-radius:10px;padding:10px 14px;border-color:#e2e8f0;font-size:13px;">
                        <small class="text-muted" style="font-size:11px;">Bootstrap Icon class (e.g. <code>bi bi-shield-check</code>) or leave blank.</small>
                    </div>

                    <div class="mb-3">
                        <label for="short_description" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                            Short Description / Summary
                        </label>
                        <textarea name="short_description"
                                  id="short_description"
                                  rows="3"
                                  class="form-control @error('short_description') is-invalid @enderror"
                                  style="border-radius:10px;padding:10px 14px;border-color:#e2e8f0;font-size:13px;">{{ old('short_description', $service->short_description) }}</textarea>
                        @error('short_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-0">
                        <label for="serviceContent" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                            Service Content & Details <span class="text-danger">*</span>
                        </label>
                        <textarea name="content"
                                  id="serviceContent"
                                  rows="12"
                                  class="form-control @error('content') is-invalid @enderror"
                                  required>{{ old('content', $service->content) }}</textarea>
                        @error('content')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- ── SEO METADATA CARD ── --}}
                <div class="form-section-card">
                    <div class="form-section-title">
                        <i class="bi bi-search text-primary"></i> SEO Settings
                    </div>

                    <div class="mb-3">
                        <label for="meta_title" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                            Meta Title
                        </label>
                        <input type="text"
                               name="meta_title"
                               id="meta_title"
                               class="form-control @error('meta_title') is-invalid @enderror"
                               value="{{ old('meta_title', $service->meta_title) }}"
                               style="border-radius:10px;padding:10px 14px;border-color:#e2e8f0;font-size:13px;">
                        @error('meta_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="meta_description" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                            Meta Description
                        </label>
                        <textarea name="meta_description"
                                  id="meta_description"
                                  rows="2"
                                  class="form-control @error('meta_description') is-invalid @enderror"
                                  style="border-radius:10px;padding:10px 14px;border-color:#e2e8f0;font-size:13px;">{{ old('meta_description', $service->meta_description) }}</textarea>
                        @error('meta_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="meta_keywords" class="form-label" style="font-weight:700;font-size:13px;color:#334155;">
                                Meta Keywords
                            </label>
                            <input type="text"
                                   name="meta_keywords"
                                   id="meta_keywords"
                                   class="form-control @error('meta_keywords') is-invalid @enderror"
                                   value="{{ old('meta_keywords', $service->meta_keywords) }}"
                                   style="border-radius:10px;padding:10px 14px;border-color:#e2e8f0;font-size:13px;">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="canonical_url" class="form-label d-flex justify-content-between align-items-center" style="font-weight:700;font-size:13px;color:#334155;">
                                <span>Canonical URL</span>
                                <span class="badge" style="background:#e0f2fe;color:#0369a1;font-size:10px;font-weight:700;">Auto-generated</span>
                            </label>
                            <div class="input-group">
                                <input type="url"
                                       name="canonical_url"
                                       id="canonical_url"
                                       class="form-control @error('canonical_url') is-invalid @enderror"
                                       placeholder="{{ url('service') }}/..."
                                       value="{{ old('canonical_url', $service->canonical_url) }}"
                                       style="border-radius:10px 0 0 10px;padding:10px 14px;border-color:#e2e8f0;font-size:13px;">
                                <button type="button" id="btnSyncCanonical" class="btn btn-outline-secondary" style="border-radius:0 10px 10px 0;border-color:#e2e8f0;font-size:12px;font-weight:600;" title="Reset / Auto-sync with current slug">
                                    <i class="bi bi-arrow-repeat"></i>
                                </button>
                            </div>
                            <small class="text-muted" style="font-size:11px;">Automatically generated from service slug.</small>
                            @error('canonical_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            {{-- ── RIGHT COLUMN: MEDIA & STATUS ── --}}
            <div class="col-lg-4">
                {{-- Featured Image Card --}}
                <div class="form-section-card">
                    <div class="form-section-title">
                        <i class="bi bi-image text-danger"></i> Featured Image
                    </div>

                    <div class="mb-3">
                        <div class="image-preview-box mb-3" id="previewContainer">
                            <img id="imagePreview" src="{{ $service->image_url }}" alt="{{ $service->title }}" style="display:block;">
                            <div id="previewPlaceholder" class="text-center p-3 text-muted" style="display:none;">
                                <i class="bi bi-cloud-arrow-up" style="font-size:32px;color:#cbd5e1;"></i>
                                <div style="font-size:12px;font-weight:600;margin-top:6px;">No image selected</div>
                            </div>
                        </div>

                        <input type="file"
                               name="image"
                               id="imageInput"
                               class="form-control @error('image') is-invalid @enderror"
                               accept="image/jpeg,image/png,image/jpg,image/webp,image/gif"
                               style="border-radius:10px;border-color:#e2e8f0;font-size:12px;">
                        <small class="text-muted d-block mt-1" style="font-size:11px;">
                            Leave empty to keep existing image. (Max 5MB).
                        </small>
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Publish Status Card --}}
                <div class="form-section-card">
                    <div class="form-section-title">
                        <i class="bi bi-send-fill text-success"></i> Publishing
                    </div>

                    <div class="mb-3">
                        <label class="form-label" style="font-weight:700;font-size:13px;color:#334155;">Status</label>
                        <select name="status" class="form-select" style="border-radius:10px;border-color:#e2e8f0;padding:10px 14px;font-size:13px;font-weight:600;">
                            <option value="1" {{ old('status', $service->status ? '1' : '0') == '1' ? 'selected' : '' }}>Published / Active</option>
                            <option value="0" {{ old('status', $service->status ? '1' : '0') === '0' ? 'selected' : '' }}>Draft / Inactive</option>
                        </select>
                    </div>

                    <div class="d-grid gap-2 pt-2">
                        <button type="submit" class="btn" style="background:#f97316;color:#fff;font-weight:700;padding:12px;border-radius:10px;box-shadow:0 4px 14px rgba(249,115,22,0.3);">
                            <i class="bi bi-check2-circle me-1"></i> Update Service
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <!-- Jodit Editor JS (Local first, CDN fallback) -->
    <script src="{{ asset_url('assets/vendor/jodit/jodit.min.js') }}"></script>
    <script>
        if (typeof Jodit === 'undefined') {
            document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/jodit/4.12.37/es2021/jodit.min.js"><\/script>');
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // ── Initialize Jodit Editor ──
            if (typeof Jodit !== 'undefined') {
                const editor = Jodit.make('#serviceContent', {
                    height: 480,
                    toolbarSticky: true,
                    placeholder: 'Write comprehensive service details, highlights, what is included, etc...',
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

            // ── Slug & Canonical Sync ──
            const slugInput = document.getElementById('slug');
            const canonicalInput = document.getElementById('canonical_url');
            const btnSyncCanonical = document.getElementById('btnSyncCanonical');
            const serviceBaseUrl = "{{ url('service') }}";

            if (btnSyncCanonical && canonicalInput && slugInput) {
                btnSyncCanonical.addEventListener('click', function() {
                    const currentSlug = slugInput.value.trim();
                    if (currentSlug) {
                        canonicalInput.value = serviceBaseUrl + '/' + currentSlug;
                    }
                });
            }

            // ── Live Image Preview ──
            const imageInput = document.getElementById('imageInput');
            const imagePreview = document.getElementById('imagePreview');
            const previewPlaceholder = document.getElementById('previewPlaceholder');

            imageInput.addEventListener('change', function () {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        imagePreview.src = e.target.result;
                        imagePreview.style.display = 'block';
                        if (previewPlaceholder) previewPlaceholder.style.display = 'none';
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endpush


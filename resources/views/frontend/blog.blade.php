@extends('frontend.layout.app')
@section('title', ($activeCategory ? $activeCategory->name . ' - ' : '') . 'Blog | Cloudytailz – Complete Dog & Cat Pet Care Services')
@section('meta_description', $activeCategory ? ($activeCategory->description ?: 'Explore expert articles on ' . $activeCategory->name . ' for your dogs and cats from Cloudytailz.') : 'Stay updated with expert-backed insights on dog and cat care, including health management, diet planning, grooming, and preventive care.')
@section('meta_keywords', 'Cloudytailz, pet care blog, dog care tips, cat care, pet grooming, pet nutrition, vet advice India')
@section('meta_robots', 'index, follow')
@section('canonical', url()->current())

@push('styles')
<style>
    /* Category Filter Pills */
    .blog-filter-pills {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        align-items: center;
        margin-bottom: 40px;
    }
    .blog-filter-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 9px 20px;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        background: #f1f5f9;
        color: #475569;
        border: 1px solid #e2e8f0;
        transition: all 0.25s ease;
    }
    .blog-filter-pill:hover {
        background: #e2e8f0;
        color: #0f172a;
        transform: translateY(-2px);
    }
    .blog-filter-pill.active {
        background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
        color: #ffffff;
        border-color: #ea580c;
        box-shadow: 0 4px 14px rgba(249, 115, 22, 0.35);
    }
    .blog-filter-count {
        font-size: 11px;
        font-weight: 700;
        padding: 2px 7px;
        border-radius: 12px;
        background: rgba(0, 0, 0, 0.08);
    }
    .blog-filter-pill.active .blog-filter-count {
        background: rgba(255, 255, 255, 0.25);
        color: #ffffff;
    }

    /* Modern Blog Card */
    .blog-card {
        background: #ffffff;
        border-radius: 20px;
        border: 1px solid #edf2f7;
        box-shadow: 0 4px 20px rgba(15, 23, 42, 0.04);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        height: 100%;
        transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
    }
    .blog-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 20px 38px rgba(249, 115, 22, 0.12);
        border-color: #fed7aa;
    }

    /* Thumbnail Area */
    .blog-card-thumb-wrap {
        position: relative;
        overflow: hidden;
        aspect-ratio: 16 / 10;
        background: #f1f5f9;
    }
    .blog-card-thumb-link {
        display: block;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    .blog-card-thumb {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        display: block;
    }
    .blog-card:hover .blog-card-thumb {
        transform: scale(1.07);
    }

    /* Floating Badges on Image */
    .blog-card-badge {
        position: absolute;
        top: 14px;
        left: 14px;
        z-index: 2;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        color: #ea580c;
        font-weight: 700;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 0.6px;
        padding: 5px 12px;
        border-radius: 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        text-decoration: none;
        border: 1px solid rgba(254, 215, 170, 0.7);
        transition: all 0.2s;
    }
    .blog-card-badge:hover {
        background: #f97316;
        color: #ffffff;
    }
    .blog-card-readtime {
        position: absolute;
        top: 14px;
        right: 14px;
        z-index: 2;
        background: rgba(15, 23, 42, 0.72);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        color: #ffffff;
        font-weight: 600;
        font-size: 11px;
        padding: 5px 10px;
        border-radius: 20px;
    }

    /* Card Body */
    .blog-card-body {
        padding: 24px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }
    .blog-card-meta {
        display: flex;
        align-items: center;
        gap: 16px;
        font-size: 12px;
        color: #8b92a9;
        font-weight: 500;
        margin-bottom: 12px;
    }
    .blog-card-title {
        font-size: 19px;
        font-weight: 800;
        line-height: 1.4;
        margin: 0 0 10px;
        color: #0f172a;
    }
    .blog-card-title a {
        color: #0f172a;
        text-decoration: none;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        transition: color 0.2s ease;
    }
    .blog-card:hover .blog-card-title a {
        color: #f97316;
    }
    .blog-card-excerpt {
        font-size: 14px;
        color: #64748b;
        line-height: 1.6;
        margin: 0 0 20px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Card Footer / CTA */
    .blog-card-footer {
        margin-top: auto;
        padding-top: 16px;
        border-top: 1px solid #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .blog-card-btn {
        color: #f97316;
        font-weight: 700;
        font-size: 13px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.2s ease;
    }
    .blog-card-btn .arrow-icon {
        font-size: 11px;
        transition: transform 0.25s ease;
    }
    .blog-card:hover .blog-card-btn .arrow-icon {
        transform: translateX(5px);
    }
    .blog-card-btn:hover {
        color: #ea580c;
    }
    .blog-card-paw {
        font-size: 16px;
        opacity: 0.4;
        transition: opacity 0.2s ease, transform 0.2s ease;
    }
    .blog-card:hover .blog-card-paw {
        opacity: 1;
        transform: rotate(15deg);
    }

    /* Search in Section Header */
    .blog-search-form {
        max-width: 360px;
        width: 100%;
    }
    .blog-search-input {
        border-radius: 25px 0 0 25px !important;
        padding: 9px 16px !important;
        border: 1px solid #e2e8f0 !important;
        font-size: 13px !important;
    }
    .blog-search-btn {
        border-radius: 0 25px 25px 0 !important;
        background: #f97316 !important;
        border-color: #f97316 !important;
        padding: 0 18px !important;
        color: #ffffff !important;
    }
    .blog-search-btn:hover {
        background: #ea580c !important;
        color: #ffffff !important;
    }

    /* Pagination */
    .pagination {
        gap: 6px;
    }
    .pagination .page-item .page-link {
        border-radius: 12px;
        border: 1px solid #e2e8f0;
        color: #0f172a;
        font-weight: 600;
        padding: 8px 16px;
        transition: all 0.2s;
    }
    .pagination .page-item.active .page-link {
        background: #f97316;
        border-color: #f97316;
        color: #fff;
        box-shadow: 0 4px 12px rgba(249, 115, 22, 0.3);
    }

    @media (max-width: 768px) {
        .blog-card-body {
            padding: 18px;
        }
        .blog-card-title {
            font-size: 17px;
        }
        .blog-search-form {
            max-width: 100%;
        }
    }
</style>
@endpush

@section('content')

<!-- Page Header Section Start -->
<div class="page-header bg-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">
                        {{ $activeCategory ? $activeCategory->name : 'Our Blogs' }}
                    </h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                            @if($activeCategory)
                                <li class="breadcrumb-item active" aria-current="page">{{ $activeCategory->name }}</li>
                            @else
                                <li class="breadcrumb-item active" aria-current="page">All Articles</li>
                            @endif
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->

<!-- Our Blog Section Start -->
<div class="our-blog">
    <div class="container">
        <div class="row section-row align-items-center mb-4">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Latest Blogs</h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">
                        @if($activeCategory)
                            Expert Articles in {{ $activeCategory->name }}
                        @else
                            Caring better for your dogs and cats every day
                        @endif
                    </h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Search & Content Start -->
                <div class="section-content-btn d-flex flex-column align-items-lg-end gap-2 mt-3 mt-lg-0">
                    <form method="GET" action="{{ route('blog') }}" class="blog-search-form">
                        @if($activeCategory)
                            <input type="hidden" name="category" value="{{ $activeCategory->slug }}">
                        @endif
                        <div class="input-group">
                            <input type="text" name="search" value="{{ request('search') }}" class="form-control blog-search-input" placeholder="Search pet health, care, tips...">
                            <button type="submit" class="btn blog-search-btn">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </form>

                    @if($activeCategory || request('search'))
                        <div>
                            <a href="{{ route('blog') }}" class="text-muted" style="font-size:12px;font-weight:600;text-decoration:none;">
                                <i class="fa-solid fa-rotate-left me-1"></i> Clear filters / View all
                            </a>
                        </div>
                    @endif
                </div>
                <!-- Search & Content End -->
            </div>
        </div>

        {{-- ── CATEGORY FILTER TABS ── --}}
        @if($categories->isNotEmpty())
            <div class="blog-filter-pills">
                <a href="{{ route('blog', request('search') ? ['search' => request('search')] : []) }}"
                   class="blog-filter-pill {{ !$activeCategory ? 'active' : '' }}">
                    <span>🐾 All Articles</span>
                    <span class="blog-filter-count">{{ \App\Models\Blog::published()->count() }}</span>
                </a>
                @foreach($categories as $cat)
                    <a href="{{ route('blog', array_merge(['category' => $cat->slug], request('search') ? ['search' => request('search')] : [])) }}"
                       class="blog-filter-pill {{ $activeCategory && $activeCategory->id === $cat->id ? 'active' : '' }}">
                        <span>🏷️ {{ $cat->name }}</span>
                        <span class="blog-filter-count">{{ $cat->blogs_count }}</span>
                    </a>
                @endforeach
            </div>
        @endif

        {{-- ── BLOG POSTS GRID ── --}}
        <div class="row">
            @forelse($blogs as $blog)
                @php
                    $readingTime = max(1, (int) ceil(str_word_count(strip_tags($blog->content)) / 200));
                @endphp
                <div class="col-xl-4 col-md-6 mb-4 pb-2">
                    <article class="blog-card wow fadeInUp h-100" data-wow-delay="{{ ($loop->index % 3) * 0.15 }}s">
                        {{-- Featured Image with Badges --}}
                        <div class="blog-card-thumb-wrap">
                            <a href="{{ route('blog.detail', $blog->slug) }}" class="blog-card-thumb-link" data-cursor-text="Read">
                                <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" class="blog-card-thumb" loading="lazy">
                            </a>

                            @if($blog->category)
                                <a href="{{ route('blog', ['category' => $blog->category->slug]) }}" class="blog-card-badge">
                                    {{ $blog->category->name }}
                                </a>
                            @endif

                            <span class="blog-card-readtime">
                                <i class="fa-regular fa-clock me-1"></i> {{ $readingTime }} min read
                            </span>
                        </div>

                        {{-- Card Body --}}
                        <div class="blog-card-body">
                            <div class="blog-card-meta">
                                <span>
                                    <i class="fa-regular fa-calendar-days text-warning me-1"></i>
                                    {{ $blog->created_at ? $blog->created_at->format('M d, Y') : '' }}
                                </span>
                                <span>
                                    <i class="fa-regular fa-user text-warning me-1"></i>
                                    {{ $blog->author ?: 'Cloudytailz' }}
                                </span>
                            </div>

                            <h3 class="blog-card-title">
                                <a href="{{ route('blog.detail', $blog->slug) }}">
                                    {{ $blog->title }}
                                </a>
                            </h3>

                            @if($blog->short_description)
                                <p class="blog-card-excerpt">
                                    {{ \Illuminate\Support\Str::limit($blog->short_description, 115) }}
                                </p>
                            @endif

                            {{-- Footer / CTA --}}
                            <div class="blog-card-footer">
                                <a href="{{ route('blog.detail', $blog->slug) }}" class="blog-card-btn">
                                    <span>Read Article</span>
                                    <i class="fa-solid fa-arrow-right arrow-icon"></i>
                                </a>
                                <span class="blog-card-paw">🐾</span>
                            </div>
                        </div>
                    </article>
                </div>
            @empty
                <div class="col-12 py-5 text-center">
                    <div class="p-5 rounded-4" style="background:#f8fafc;border:1px dashed #cbd5e1;">
                        <div style="font-size:42px;margin-bottom:12px;">🐾</div>
                        <h3 style="font-weight:700;color:#1e293b;">No articles found</h3>
                        <p style="color:#64748b;font-size:14px;max-width:500px;margin:0 auto 16px;">
                            @if(request('search'))
                                No articles matched your search query "<strong>{{ request('search') }}</strong>". Try searching for different keywords or explore our categories.
                            @elseif($activeCategory)
                                There are currently no published articles in <strong>{{ $activeCategory->name }}</strong>. Please check back soon!
                            @else
                                No articles have been published yet. Please check back soon!
                            @endif
                        </p>
                        <a href="{{ route('blog') }}" class="btn-default" style="padding:10px 24px;border-radius:24px;font-size:13px;">View All Articles</a>
                    </div>
                </div>
            @endforelse
        </div>

        {{-- ── PAGINATION ── --}}
        @if($blogs->hasPages())
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    {{ $blogs->links('pagination::bootstrap-5') }}
                </div>
            </div>
        @endif
    </div>
</div>
<!-- Our Blog Section End -->

@endsection

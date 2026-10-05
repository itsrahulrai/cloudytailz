@extends('frontend.layout.app')

{{-- ── 1. PRIMARY SEO META TAGS ── --}}
@section('title', ($blog->meta_title ?: $blog->title) . ' | Cloudytailz')
@section('meta_description', $blog->meta_description ?: ($blog->short_description ?: \Illuminate\Support\Str::limit(strip_tags($blog->content), 155)))
@section('meta_keywords', $blog->meta_keywords ?: 'pet care, dog grooming, cat health, dog diet, vet services, Cloudytailz')
@section('meta_robots', 'index, follow')
@section('canonical', $blog->canonical_url ?: url()->current())

{{-- ── 2. OPEN GRAPH, TWITTER & SCHEMA.ORG JSON-LD ── --}}
@section('seo_tags')
    <!-- Open Graph (Facebook / WhatsApp / LinkedIn) -->
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Cloudytailz">
    <meta property="og:title" content="{{ $blog->meta_title ?: $blog->title }}">
    <meta property="og:description" content="{{ $blog->meta_description ?: ($blog->short_description ?: \Illuminate\Support\Str::limit(strip_tags($blog->content), 155)) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ $blog->image_url }}">
    <meta property="og:image:alt" content="{{ $blog->title }}">
    <meta property="article:published_time" content="{{ $blog->created_at ? $blog->created_at->toIso8601String() : '' }}">
    <meta property="article:modified_time" content="{{ $blog->updated_at ? $blog->updated_at->toIso8601String() : '' }}">
    @if($blog->category)
        <meta property="article:section" content="{{ $blog->category->name }}">
    @endif
    <meta property="article:author" content="{{ $blog->author ?: 'Cloudytailz' }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $blog->meta_title ?: $blog->title }}">
    <meta name="twitter:description" content="{{ $blog->meta_description ?: ($blog->short_description ?: \Illuminate\Support\Str::limit(strip_tags($blog->content), 155)) }}">
    <meta name="twitter:image" content="{{ $blog->image_url }}">

    <!-- JSON-LD: BlogPosting Schema -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "BlogPosting",
        "mainEntityOfPage": {
            "@@type": "WebPage",
            "@@id": "{{ url()->current() }}"
        },
        "headline": "{{ addslashes($blog->title) }}",
        "description": "{{ addslashes($blog->meta_description ?: ($blog->short_description ?: \Illuminate\Support\Str::limit(strip_tags($blog->content), 160))) }}",
        "image": [
            "{{ $blog->image_url }}"
        ],
        "datePublished": "{{ $blog->created_at ? $blog->created_at->toIso8601String() : '' }}",
        "dateModified": "{{ $blog->updated_at ? $blog->updated_at->toIso8601String() : '' }}",
        "author": {
            "@@type": "Person",
            "name": "{{ addslashes($blog->author ?: 'Cloudytailz Care Team') }}"
        },
        "publisher": {
            "@@type": "Organization",
            "name": "Cloudytailz",
            "logo": {
                "@@type": "ImageObject",
                "url": "{{ asset_url('assets/images/logo-png.png') }}"
            }
        }
        @if($blog->category)
        ,"articleSection": "{{ addslashes($blog->category->name) }}"
        @endif
    }
    </script>

    <!-- JSON-LD: BreadcrumbList Schema -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "{{ url('/') }}"
            },
            {
                "@@type": "ListItem",
                "position": 2,
                "name": "Blog",
                "item": "{{ route('blog') }}"
            }
            @if($blog->category)
            ,{
                "@@type": "ListItem",
                "position": 3,
                "name": "{{ addslashes($blog->category->name) }}",
                "item": "{{ route('blog', ['category' => $blog->category->slug]) }}"
            },
            {
                "@@type": "ListItem",
                "position": 4,
                "name": "{{ addslashes($blog->title) }}",
                "item": "{{ url()->current() }}"
            }
            @else
            ,{
                "@@type": "ListItem",
                "position": 3,
                "name": "{{ addslashes($blog->title) }}",
                "item": "{{ url()->current() }}"
            }
            @endif
        ]
    }
    </script>
@endsection

{{-- ── 3. SHARP, CLEAN STYLES ── --}}
@push('styles')
<style>
    /* Reading progress bar */
    #readingProgressBar {
        position: fixed;
        top: 0;
        left: 0;
        height: 4px;
        background: linear-gradient(90deg, #f97316 0%, #ea580c 100%);
        width: 0%;
        z-index: 9999;
        transition: width 0.1s ease-out;
    }

    /* Article Container */
    .page-header-box .page-banner-heading {
        display: inline-block;
        font-size: clamp(34px, 5.5vw, 68px);
        font-weight: 700;
        line-height: 1.15em;
        letter-spacing: -0.02em;
        color: #ffffff;
        margin-bottom: 10px;
    }

    .blog-details-wrapper {
        padding: 50px 0 80px;
        background: #fbfcfe;
    }

    .article-main-card {
        background: #ffffff;
        border-radius: 24px;
        padding: 40px;
        border: 1px solid #edf2f7;
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.03);
    }

    @media (max-width: 768px) {
        .article-main-card {
            padding: 22px;
            border-radius: 16px;
        }
    }

    /* Hero Featured Image */
    .article-hero-image-wrapper {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        margin: 28px 0 35px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }
    .article-hero-image-wrapper img {
        width: 100%;
        max-height: 480px;
        object-fit: cover;
        display: block;
        transition: transform 0.4s ease;
    }

    /* Excerpt Highlight Box */
    .article-excerpt-box {
        background: #fffaf0;
        border-left: 4px solid #f97316;
        border-radius: 0 16px 16px 0;
        padding: 20px 24px;
        margin-bottom: 35px;
        font-size: 17px;
        font-weight: 500;
        line-height: 1.7;
        color: #7c2d12;
    }

    /* Rich Content Typography */
    .blog-rich-content {
        font-size: 17px;
        line-height: 1.85;
        color: #334155;
        font-family: inherit;
    }

    .blog-rich-content h1,
    .blog-rich-content h2,
    .blog-rich-content h3,
    .blog-rich-content h4 {
        color: #0f172a;
        font-weight: 800;
        margin-top: 36px;
        margin-bottom: 16px;
        line-height: 1.35;
    }

    .blog-rich-content h2 {
        font-size: 26px;
        padding-bottom: 8px;
        border-bottom: 2px solid #f1f5f9;
        position: relative;
    }
    .blog-rich-content h2::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 60px;
        height: 2px;
        background: #f97316;
    }

    .blog-rich-content h3 {
        font-size: 21px;
    }

    .blog-rich-content h4 {
        font-size: 18px;
    }

    .blog-rich-content p {
        margin-bottom: 22px;
        letter-spacing: -0.01em;
    }

    .blog-rich-content ul,
    .blog-rich-content ol {
        margin: 20px 0 26px 20px;
        padding-left: 10px;
    }

    .blog-rich-content li {
        margin-bottom: 10px;
        line-height: 1.7;
    }

    .blog-rich-content blockquote {
        background: #f8fafc;
        border-left: 4px solid #f97316;
        margin: 28px 0;
        padding: 20px 26px;
        border-radius: 0 12px 12px 0;
        font-style: italic;
        color: #1e293b;
        font-size: 18px;
    }

    .blog-rich-content img {
        max-width: 100%;
        height: auto;
        border-radius: 14px;
        margin: 24px 0;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
    }

    .blog-rich-content table {
        width: 100%;
        margin: 24px 0;
        border-collapse: collapse;
        border-radius: 12px;
        overflow: hidden;
    }
    .blog-rich-content table th,
    .blog-rich-content table td {
        border: 1px solid #e2e8f0;
        padding: 12px 16px;
        font-size: 15px;
    }
    .blog-rich-content table th {
        background: #f1f5f9;
        font-weight: 700;
        color: #0f172a;
    }

    /* Social Share Bar */
    .article-share-bar {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        padding: 18px 24px;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 14px;
        margin: 40px 0;
    }

    .share-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        transition: transform 0.2s, box-shadow 0.2s;
        color: #fff;
    }
    .share-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        color: #fff;
    }
    .share-whatsapp { background: #25D366; }
    .share-facebook { background: #1877F2; }
    .share-twitter  { background: #000000; }
    .share-linkedin { background: #0A66C2; }
    .share-copy     { background: #475569; cursor: pointer; border: none; }

    /* Author Bio Box */
    .author-bio-card {
        background: linear-gradient(135deg, #fff7ed 0%, #ffedd5 100%);
        border-radius: 20px;
        padding: 26px;
        border: 1px solid #fed7aa;
        display: flex;
        align-items: center;
        gap: 20px;
        margin-top: 40px;
    }
    .author-bio-avatar {
        width: 68px;
        height: 68px;
        background: #f97316;
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        font-weight: 800;
        flex-shrink: 0;
        box-shadow: 0 6px 16px rgba(249, 115, 22, 0.3);
    }

    /* Next / Prev Navigation */
    .post-nav-card {
        background: #ffffff;
        border: 1px solid #edf2f7;
        border-radius: 16px;
        padding: 20px;
        transition: all 0.2s;
        text-decoration: none;
        display: block;
        height: 100%;
    }
    .post-nav-card:hover {
        border-color: #f97316;
        box-shadow: 0 6px 20px rgba(249, 115, 22, 0.08);
        transform: translateY(-2px);
    }

    /* Sidebar Widgets */
    .sharp-sidebar-widget {
        background: #ffffff;
        border-radius: 20px;
        padding: 26px;
        border: 1px solid #edf2f7;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.03);
        margin-bottom: 28px;
    }
    .sharp-widget-title {
        font-size: 18px;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 18px;
        display: flex;
        align-items: center;
        gap: 10px;
        padding-bottom: 12px;
        border-bottom: 1px solid #f1f5f9;
    }

    .page-header-box h1.blog-header-title,
    .page-header-box h1 {
        font-size: clamp(22px, 2.8vw, 34px) !important;
        font-weight: 700 !important;
        line-height: 1.35em !important;
        letter-spacing: -0.01em !important;
        color: #ffffff !important;
        margin-bottom: 14px !important;
        max-width: 850px !important;
        margin-left: auto !important;
        margin-right: auto !important;
        display: block !important;
    }

    .page-header-box .breadcrumb {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        max-width: 850px;
        margin: 0 auto;
        padding: 0 12px;
        line-height: 1.6;
    }

    .page-header-box ol li.breadcrumb-item {
        font-size: clamp(13px, 1.5vw, 15px);
        word-break: break-word;
        overflow-wrap: break-word;
    }

    .page-header-box ol li.breadcrumb-item.active {
        color: rgba(255, 255, 255, 0.9) !important;
        font-weight: 500;
    }

    @media (max-width: 768px) {
        .page-header-box ol li.breadcrumb-item {
            font-size: 13px !important;
            line-height: 1.5 !important;
        }
        .page-header-box ol .breadcrumb-item + .breadcrumb-item::before {
            padding-right: 5px;
            padding-left: 5px;
        }
    }

    .sidebar-post-item {
        display: flex;
        align-items: center;
        gap: 12px;
        text-decoration: none;
        padding: 6px;
        border-radius: 12px;
        transition: all 0.2s ease;
    }
    .sidebar-post-item:hover {
        background: #f8fafc;
        transform: translateX(4px);
    }
    .sidebar-post-thumb {
        width: 72px;
        height: 56px;
        object-fit: cover;
        border-radius: 10px;
        flex-shrink: 0;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
    }
    .sidebar-post-title {
        font-weight: 700;
        color: #0f172a;
        font-size: 13px;
        line-height: 1.35;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        transition: color 0.2s ease;
    }
    .sidebar-post-item:hover .sidebar-post-title {
        color: #f97316;
    }
</style>
@endpush

@section('content')

<!-- Reading Progress Bar -->
<div id="readingProgressBar"></div>

<!-- Page Header Section Start -->
<div class="page-header bg-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3 blog-header-title" data-cursor="-opaque">{{ $blog->title }}</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                            @if($blog->category)
                                <li class="breadcrumb-item">
                                    <a href="{{ route('blog', ['category' => $blog->category->slug]) }}">
                                        {{ $blog->category->name }}
                                    </a>
                                </li>
                            @endif
                            <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->

<!-- Main Blog Details Section Start -->
<div class="blog-details-wrapper">
    <div class="container">
        <div class="row">

            {{-- ══════════════ LEFT COLUMN: ARTICLE CONTENT ══════════════ --}}
            <div class="col-lg-8">
                <article class="article-main-card">




                    {{-- Hero Cover Image --}}
                    <div class="article-hero-image-wrapper">
                        <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" loading="eager">
                    </div>

                    {{-- Key Excerpt / Highlights Callout --}}
                    @if($blog->short_description)
                        <div class="article-excerpt-box">
                            <div class="d-flex align-items-start gap-2">
                                <span style="font-size:22px;line-height:1;">🐾</span>
                                <div>
                                    <strong style="color:#c2410c;display:block;font-size:12px;text-transform:uppercase;letter-spacing:1px;margin-bottom:4px;">Quick Summary</strong>
                                    {{ $blog->short_description }}
                                </div>
                            </div>
                        </div>
                    @endif

                    {{-- Full Rich Text Article Content --}}
                    <div class="blog-rich-content">
                        {!! $blog->content !!}
                    </div>

                    {{-- Social Share Toolbar --}}
                    @php
                        $currentUrl = urlencode(url()->current());
                        $shareTitle = urlencode($blog->title);
                    @endphp
                    <div class="article-share-bar">
                        <div style="font-weight:700;color:#1e293b;font-size:14px;">
                            <i class="fa-solid fa-share-nodes text-warning me-2"></i> Share this article:
                        </div>
                        <div class="d-flex flex-wrap align-items-center gap-2">
                            <a href="https://api.whatsapp.com/send?text={{ $shareTitle }}%20{{ $currentUrl }}" target="_blank" rel="noopener noreferrer" class="share-btn share-whatsapp" title="Share on WhatsApp">
                                <i class="fa-brands fa-whatsapp"></i> WhatsApp
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ $currentUrl }}" target="_blank" rel="noopener noreferrer" class="share-btn share-facebook" title="Share on Facebook">
                                <i class="fa-brands fa-facebook-f"></i> Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?text={{ $shareTitle }}&url={{ $currentUrl }}" target="_blank" rel="noopener noreferrer" class="share-btn share-twitter" title="Share on X">
                                <i class="fa-brands fa-x-twitter"></i> X
                            </a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $currentUrl }}" target="_blank" rel="noopener noreferrer" class="share-btn share-linkedin" title="Share on LinkedIn">
                                <i class="fa-brands fa-linkedin-in"></i> LinkedIn
                            </a>
                            <button type="button" class="share-btn share-copy" onclick="copyArticleLink()" id="copyLinkBtn" title="Copy link to clipboard">
                                <i class="fa-solid fa-link"></i> <span id="copyBtnText">Copy Link</span>
                            </button>
                        </div>
                    </div>

                    {{-- Author Bio Card --}}
                    <div class="author-bio-card">
                        <div class="author-bio-avatar">
                            🐾
                        </div>
                        <div>
                            <div style="font-size:12px;font-weight:700;color:#c2410c;text-transform:uppercase;letter-spacing:1px;">Written by</div>
                            <h4 style="font-weight:800;color:#0f172a;margin:2px 0 6px;font-size:18px;">
                                {{ $blog->author ?: 'Cloudytailz Care Team' }}
                            </h4>
                            <p style="font-size:13px;color:#475569;margin-bottom:0;line-height:1.5;">
                                Passionate pet wellness professionals at Cloudytailz dedicated to bringing dogs and cats the finest home grooming, balanced nutrition, and gentle veterinary support.
                            </p>
                        </div>
                    </div>

                    {{-- Previous & Next Navigation --}}
                    <div class="row g-3 mt-4 pt-3" style="border-top:1px solid #edf2f7;">
                        <div class="col-sm-6">
                            @if($prevBlog)
                                <a href="{{ route('blog.detail', $prevBlog->slug) }}" class="post-nav-card">
                                    <div style="font-size:11px;font-weight:700;color:#8b92a9;text-transform:uppercase;margin-bottom:4px;">
                                        &larr; Previous Article
                                    </div>
                                    <div style="font-weight:700;color:#0f172a;font-size:14px;line-height:1.3;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
                                        {{ $prevBlog->title }}
                                    </div>
                                </a>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            @if($nextBlog)
                                <a href="{{ route('blog.detail', $nextBlog->slug) }}" class="post-nav-card text-sm-end">
                                    <div style="font-size:11px;font-weight:700;color:#8b92a9;text-transform:uppercase;margin-bottom:4px;">
                                        Next Article &rarr;
                                    </div>
                                    <div style="font-weight:700;color:#0f172a;font-size:14px;line-height:1.3;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
                                        {{ $nextBlog->title }}
                                    </div>
                                </a>
                            @endif
                        </div>
                    </div>

                </article>
            </div>

            {{-- ══════════════ RIGHT COLUMN: STICKY SIDEBAR ══════════════ --}}
            <div class="col-lg-4">
                <aside class="sticky-top" style="top:90px;z-index:10;">

                    {{-- Latest Articles Widget (Replaced Search) --}}
                    @if(isset($latestBlogs) && $latestBlogs->isNotEmpty())
                        <div class="sharp-sidebar-widget">
                            <div class="sharp-widget-title">
                                <i class="fa-solid fa-bolt-lightning text-warning"></i> Latest Articles
                            </div>
                            <div class="d-flex flex-column gap-2">
                                @foreach($latestBlogs as $latest)
                                    <a href="{{ route('blog.detail', $latest->slug) }}" class="sidebar-post-item">
                                        <img src="{{ $latest->image_url }}" alt="{{ $latest->title }}" class="sidebar-post-thumb" loading="lazy">
                                        <div style="flex-grow:1;min-width:0;">
                                            <div style="font-size:11px;color:#8b92a9;margin-bottom:3px;display:flex;align-items:center;gap:6px;">
                                                <span><i class="fa-regular fa-calendar-days me-1"></i>{{ $latest->created_at ? $latest->created_at->format('M d, Y') : '' }}</span>
                                                @if($latest->category)
                                                    <span style="color:#f97316;font-weight:600;">&bull; {{ $latest->category->name }}</span>
                                                @endif
                                            </div>
                                            <div class="sidebar-post-title">
                                                {{ $latest->title }}
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- Categories Widget --}}
                    <div class="sharp-sidebar-widget">
                        <div class="sharp-widget-title">
                            <i class="fa-solid fa-tags text-warning"></i> Explore Categories
                        </div>
                        <div class="d-flex flex-column gap-2">
                            <a href="{{ route('blog') }}"
                               class="d-flex align-items-center justify-content-between p-2 px-3 rounded text-decoration-none"
                               style="background:#f8fafc;color:#1e293b;font-weight:600;font-size:13px;transition:all 0.2s;">
                                <span> All Articles</span>
                                <span class="badge" style="background:#e2e8f0;color:#475569;border-radius:10px;">
                                    {{ \App\Models\Blog::published()->count() }}
                                </span>
                            </a>

                            @foreach($categories as $cat)
                                <a href="{{ route('blog', ['category' => $cat->slug]) }}"
                                   class="d-flex align-items-center justify-content-between p-2 px-3 rounded text-decoration-none"
                                   style="background: {{ $blog->category_id === $cat->id ? '#fff7ed' : '#f8fafc' }}; color: {{ $blog->category_id === $cat->id ? '#f97316' : '#1e293b' }}; border: {{ $blog->category_id === $cat->id ? '1px solid #fed7aa' : '1px solid transparent' }}; font-weight: 600; font-size: 13px; transition: all 0.2s;">
                                    <span>{{ $cat->name }}</span>
                                    <span class="badge" style="background: {{ $blog->category_id === $cat->id ? '#f97316' : '#e2e8f0' }}; color: {{ $blog->category_id === $cat->id ? '#fff' : '#475569' }}; border-radius:10px;">
                                        {{ $cat->blogs_count }}
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    {{-- Related Posts Widget --}}
                    @if($relatedBlogs->isNotEmpty())
                        <div class="sharp-sidebar-widget">
                            <div class="sharp-widget-title">
                                <i class="fa-solid fa-newspaper text-warning"></i> Related Articles
                            </div>
                            <div class="d-flex flex-column gap-2">
                                @foreach($relatedBlogs as $related)
                                    <a href="{{ route('blog.detail', $related->slug) }}" class="sidebar-post-item">
                                        <img src="{{ $related->image_url }}" alt="{{ $related->title }}" class="sidebar-post-thumb" loading="lazy">
                                        <div style="flex-grow:1;min-width:0;">
                                            <div style="font-size:11px;color:#8b92a9;margin-bottom:3px;display:flex;align-items:center;gap:6px;">
                                                <span><i class="fa-regular fa-calendar-days me-1"></i>{{ $related->created_at ? $related->created_at->format('M d, Y') : '' }}</span>
                                                @if($related->category)
                                                    <span style="color:#f97316;font-weight:600;">&bull; {{ $related->category->name }}</span>
                                                @endif
                                            </div>
                                            <div class="sidebar-post-title">
                                                {{ $related->title }}
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- Booking CTA Banner --}}
                    <div class="p-4 rounded-4 text-center text-white position-relative overflow-hidden"
                         style="background: linear-gradient(135deg, #f97316 0%, #ea580c 100%); box-shadow: 0 10px 30px rgba(249, 115, 22, 0.25);">
                        
                        <h4 style="font-weight:800;color:#fff;margin-bottom:8px;">Need Care at Your Doorstep?</h4>
                        <p style="font-size:13px;opacity:0.92;line-height:1.6;margin-bottom:20px;">
                            Give your furry friends the best grooming, routine checkups, and loving attention right in the comfort of your home.
                        </p>
                        <a href="{{ route('contact') }}" class="btn btn-light w-100" style="font-weight:800;color:#ea580c;border-radius:24px;padding:10px 20px;font-size:14px;box-shadow:0 4px 12px rgba(0,0,0,0.1);">
                            Book Home Service Today &rarr;
                        </a>
                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>
<!-- Main Blog Details Section End -->

@endsection

@push('scripts')
<script>
    // ── Dynamic Reading Progress Bar ──
    window.addEventListener('scroll', function () {
        const winScroll = document.documentElement.scrollTop || document.body.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        const bar = document.getElementById('readingProgressBar');
        if (bar) {
            bar.style.width = scrolled + '%';
        }
    });

    // ── Copy Article Link with Visual Confirmation ──
    function copyArticleLink() {
        const url = window.location.href;
        navigator.clipboard.writeText(url).then(function () {
            const btnText = document.getElementById('copyBtnText');
            const original = btnText.innerText;
            btnText.innerText = 'Copied! ✓';
            setTimeout(function () {
                btnText.innerText = original;
            }, 2500);
        }).catch(function (err) {
            console.error('Failed to copy link: ', err);
        });
    }
</script>
@endpush

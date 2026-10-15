@extends('frontend.layout.app')

{{-- ── 1. PRIMARY SEO META TAGS ── --}}
@section('title', ($service->meta_title ?: $service->title) . ' | Cloudytailz Pet Care')
@section('meta_description', $service->meta_description ?: ($service->short_description ?: \Illuminate\Support\Str::limit(strip_tags($service->content), 155)))
@section('meta_keywords', $service->meta_keywords ?: 'Cloudytailz, pet services, dog care, cat care, pet grooming, veterinary care')
@section('meta_robots', 'index, follow')
@section('canonical', $service->canonical_url ?: url()->current())

{{-- ── 2. OPEN GRAPH, TWITTER & SCHEMA.ORG JSON-LD ── --}}
@section('seo_tags')
    <!-- Open Graph (Facebook / WhatsApp / LinkedIn) -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Cloudytailz">
    <meta property="og:title" content="{{ $service->meta_title ?: $service->title }}">
    <meta property="og:description" content="{{ $service->meta_description ?: ($service->short_description ?: \Illuminate\Support\Str::limit(strip_tags($service->content), 155)) }}">
    <meta property="og:url" content="{{ $service->canonical_url }}">
    <meta property="og:image" content="{{ $service->image_url }}">
    <meta property="og:image:alt" content="{{ $service->title }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $service->meta_title ?: $service->title }}">
    <meta name="twitter:description" content="{{ $service->meta_description ?: ($service->short_description ?: \Illuminate\Support\Str::limit(strip_tags($service->content), 155)) }}">
    <meta name="twitter:image" content="{{ $service->image_url }}">

    <!-- JSON-LD: Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "{{ addslashes($service->title) }}",
        "provider": {
            "@type": "LocalBusiness",
            "name": "Cloudytailz",
            "image": "{{ asset_url('assets/images/logo-png.png') }}",
            "url": "{{ url('/') }}"
        },
        "description": "{{ addslashes($service->meta_description ?: ($service->short_description ?: \Illuminate\Support\Str::limit(strip_tags($service->content), 160))) }}",
        "image": "{{ $service->image_url }}"
    }
    </script>

    <!-- JSON-LD: BreadcrumbList Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "{{ url('/') }}"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "{{ addslashes($service->title) }}",
                "item": "{{ url()->current() }}"
            }
        ]
    }
    </script>
@endsection

@push('styles')
<style>
    .dynamic-service-body {
        font-size: 16px;
        line-height: 1.8;
        color: #4b5563;
    }
    .dynamic-service-body h2 {
        font-family: 'Nunito', sans-serif;
        font-weight: 800;
        font-size: 26px;
        color: #1a1f36;
        margin-top: 32px;
        margin-bottom: 16px;
    }
    .dynamic-service-body h3 {
        font-family: 'Nunito', sans-serif;
        font-weight: 700;
        font-size: 21px;
        color: #1a1f36;
        margin-top: 24px;
        margin-bottom: 14px;
    }
    .dynamic-service-body h4 {
        font-weight: 700;
        font-size: 18px;
        color: #1a1f36;
        margin-top: 20px;
        margin-bottom: 10px;
    }
    .dynamic-service-body p {
        margin-bottom: 18px;
    }
    .dynamic-service-body ul, .dynamic-service-body ol {
        margin-bottom: 20px;
        padding-left: 24px;
    }
    .dynamic-service-body li {
        margin-bottom: 8px;
    }
    .dynamic-service-body img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        margin: 16px 0;
    }
    .dynamic-service-body blockquote {
        border-left: 4px solid #f97316;
        padding: 14px 20px;
        background: #fff7ed;
        border-radius: 0 12px 12px 0;
        margin: 24px 0;
        font-style: italic;
        color: #9a3412;
    }
    .dynamic-service-body table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }
    .dynamic-service-body th, .dynamic-service-body td {
        border: 1px solid #e5e7eb;
        padding: 10px 14px;
    }
    .dynamic-service-body th {
        background: #f8fafc;
        font-weight: 700;
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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">{{ $service->title }}</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $service->title }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Page Service Single Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <!-- Service Single Content Start -->
                    <div class="service-single-content">

                        @if(!empty($service->image))
                            <!-- Page Single image Start -->
                            <div class="page-single-image mb-4">
                                <figure class="image-anime reveal">
                                    <img src="{{ $service->image_url }}" alt="{{ $service->title }}" style="width:100%; border-radius:16px; object-fit:cover; max-height:480px;">
                                </figure>
                            </div>
                            <!-- Page Single image End -->
                        @endif

                        <!-- Service Entry Start -->
                        <div class="service-entry">
                            @if(!empty($service->short_description))
                                <div class="service-intro mb-4 p-4" style="background:#fff7ed; border-left:4px solid #f97316; border-radius:12px;">
                                    <p class="mb-0" style="font-size:17px; line-height:1.7; color:#9a3412; font-weight:600;">
                                        {{ $service->short_description }}
                                    </p>
                                </div>
                            @endif

                            {{-- Rich text content from Jodit --}}
                            <div class="dynamic-service-body">
                                {!! $service->content !!}
                            </div>

                            {{-- Appointment Booking Banner --}}
                            <div class="mt-5 p-4 p-md-5 d-flex flex-column flex-md-row align-items-center justify-content-between gap-3"
                                 style="background:linear-gradient(135deg, #1a1f36 0%, #2d3748 100%); border-radius:18px; color:#fff;">
                                <div>
                                    <h3 class="text-white mb-2" style="font-weight:800; font-size:22px;">Ready to Book {{ $service->title }}?</h3>
                                    <p class="mb-0 text-white-50" style="font-size:14px;">Contact our friendly pet care specialists today to schedule your session.</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="{{ route('contact') }}" class="btn-default" style="box-shadow:0 6px 20px rgba(249,115,22,0.4);">
                                        Book Appointment
                                    </a>
                                </div>
                            </div>

                            @if(isset($otherServices) && $otherServices->count() > 0)
                                <div class="mt-5 pt-4 border-top">
                                    <h3 class="mb-4" style="font-weight:800; font-size:22px; color:#1a1f36;">Other Available Services</h3>
                                    <div class="row g-3">
                                        @foreach($otherServices as $other)
                                            <div class="col-md-6">
                                                <a href="{{ route('service.detail', $other->slug) }}" class="text-decoration-none">
                                                    <div class="p-3 d-flex align-items-center gap-3"
                                                         style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px; transition:all 0.2s;"
                                                         onmouseover="this.style.borderColor='#f97316'; this.style.background='#fff7ed';"
                                                         onmouseout="this.style.borderColor='#e2e8f0'; this.style.background='#f8fafc';">
                                                        <img src="{{ $other->image_url }}" alt="{{ $other->title }}"
                                                             style="width:54px; height:54px; border-radius:10px; object-fit:cover; flex-shrink:0;">
                                                        <div>
                                                            <h5 class="mb-1" style="font-size:15px; font-weight:700; color:#1e293b;">{{ $other->title }}</h5>
                                                            <span style="font-size:12px; color:#f97316; font-weight:700;">Learn More <i class="bi bi-arrow-right"></i></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                        </div>
                        <!-- Service Entry End -->

                    </div>
                    <!-- Service Single Content End -->
                </div>

                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    @include('frontend.side-bar')
                    <!-- Page Single Sidebar End -->
                </div>

            </div>
        </div>
    </div>
    <!-- Page Service Single End -->

@endsection


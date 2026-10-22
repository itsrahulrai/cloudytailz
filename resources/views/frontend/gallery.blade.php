@extends('frontend.layout.app')

@section('title', 'Adorable Pets & Beautiful Grooming Moments | Cloudytailz')
@section('meta_description', "See happy faces, fluffy makeovers, and precious moments in our pet gallery. Discover Cloudytailz's loving care for dogs and cats. Explore now!")
@section('meta_keywords', 'Cloudytailz, pet care, dog care, cat care, pet grooming, pet food, vet services, pet services India, dog grooming, cat grooming, pet clinic, pet health care')
@section('meta_robots', 'index, follow')
@section('canonical', 'https://cloudytailz.com/gallery')
@section('seo_tags')
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CloudyTailz">
    <meta property="og:title" content="Adorable Pets & Beautiful Grooming Moments | Cloudytailz">
    <meta property="og:description" content="See happy faces, fluffy makeovers, and precious moments in our pet gallery. Discover Cloudytailz's loving care for dogs and cats. Explore now!">
    <meta property="og:url" content="https://cloudytailz.com/gallery">
@endsection
@section('content')


    <!-- Page Header Section Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Gallery</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Photo Gallery Start -->
    <div class="page-gallery">
        <div class="container">
            <!-- gallery section start -->
            <div class="row gallery-items page-gallery-box">
                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp">
                        <a href="{{ asset_url('assets/images/services/cat-grooming.png') }}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset_url('assets/images/services/cat-grooming.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>

                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ asset_url('assets/images/services/dog-grooming.png') }}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset_url('assets/images/services/dog-grooming.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>

                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="0.4s">
                        <a href="{{ asset_url('assets/images/services/vet-home-visit.png') }}" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{ asset_url('assets/images/services/vet-home-visit.png') }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>

            </div>
            <!-- gallery section end -->
        </div>
    </div>
    <!-- Photo Gallery End -->


@endsection

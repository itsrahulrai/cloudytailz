@extends('frontend.layout.app')

@section('title', 'Cloudytailz – Complete Dog & Cat Pet Care Services')
@section('meta_description',
    'Cloudytailz offers premium pet care services for dogs and cats including grooming, healthy
    food, vet support, and personalized care to keep your furry friends happy and healthy.')
@section('meta_keywords',
    'Cloudytailz, pet care, dog care, cat care, pet grooming, pet food, vet services, pet services
    India, dog grooming, cat grooming, pet clinic, pet health care')
@section('meta_robots', 'index, follow')
@section('canonical', url()->current())
@section('content')


    <!-- Page Header Section Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Pet Nutritionist</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pet Nutritionist</li>
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
                        <!-- Page Single image Start -->
                        <div class="page-single-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset_url('assets/images/services/pet-nutritionist.jpg') }}"
                                    alt="Pet Nutritionist">
                            </figure>
                        </div>
                        <!-- Page Single image End -->

                        <!-- Service Entry Start -->
                        <div class="service-entry">
                            <h2 class="text-anime-style-3">Pet Nutritionist</h2>

                            <p class="wow fadeInUp">
                                At Cloudytailz, our pet nutritionist service is focused on improving your pet’s overall
                                health through balanced and customized diet plans. Every pet has different nutritional needs
                                depending on their age, breed, lifestyle, and health condition. Our experts carefully assess
                                your pet’s requirements to create a diet that supports energy, immunity, and long-term
                                wellness.
                            </p>

                            <p>
                                Whether your pet needs weight management, better digestion, or support for specific health
                                conditions, we provide personalized guidance and meal planning. Our goal is to ensure your
                                pet gets the right nutrients in the right proportions to live a happy and healthy life.
                            </p>

                            <div class="health-checkup-box">
                                <h2 class="text-anime-style-3">What we include in pet nutritionist service</h2>

                                <p class="wow fadeInUp" data-wow-delay="0.2s">
                                    Our nutrition plans are designed to promote better health, improve lifestyle, and
                                    prevent future health issues.
                                </p>

                                <div class="health-checkup-item-list">

                                    <div class="health-checkup-item wow fadeInUp">
                                        <div class="health-checkup-item-content">
                                            <h3>Customized Diet Plans</h3>
                                            <p>Personalized meal plans tailored to your pet’s unique needs and health goals.
                                            </p>
                                            <ul>
                                                <li>Breed and age-based diet planning</li>
                                                <li>Weight management programs</li>
                                                <li>Special diet for allergies and sensitivities</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="health-checkup-item wow fadeInUp">
                                        <div class="health-checkup-item-content">
                                            <h3>Health & Nutrition Guidance</h3>
                                            <p>Expert advice to maintain proper nutrition and improve your pet’s lifestyle.
                                            </p>
                                            <ul>
                                                <li>Balanced nutrition consultation</li>
                                                <li>Supplement and feeding guidance</li>
                                                <li>Diet plans for medical conditions</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
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

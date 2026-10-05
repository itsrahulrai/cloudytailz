@extends('frontend.layout.app')
@section('title', 'Dog Grooming - Cloudytailz – Complete Dog & Cat Pet Care Services')
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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Dog Grooming</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dog Grooming</li>
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
                                <img src="{{ asset_url('assets/images/services/dog-grooming.png')}}" alt="Dog Grooming">
                            </figure>
                        </div>
                        <!-- Page Single image End -->

                        <!-- Service Entry Start -->
                        <!-- Service Entry Start -->
                        <div class="service-entry">
                            <h2 class="text-anime-style-3">Dog Grooming</h2>

                            <p class="wow fadeInUp">
                                At Cloudytailz, our dog grooming service is designed to keep your pet clean, comfortable,
                                and well-maintained. Dogs need regular grooming to avoid dirt buildup, bad odor, excessive
                                shedding, and skin problems. Our trained groomers handle every dog with patience and care,
                                ensuring a safe and stress-free experience.
                            </p>

                            <p>
                                We provide complete grooming including bathing, haircut, nail trimming, and hygiene care.
                                Whether your dog needs a simple clean-up or a full grooming session, we customize our
                                service based on breed, coat type, and lifestyle to keep your pet looking fresh and feeling
                                great.
                            </p>

                            <div class="health-checkup-box">
                                <h2 class="text-anime-style-3">What we include in dog grooming</h2>

                                <p class="wow fadeInUp" data-wow-delay="0.2s">
                                    Our grooming service focuses on cleanliness, hygiene, and comfort to ensure your dog
                                    stays healthy and active.
                                </p>

                                <div class="health-checkup-item-list">

                                    <div class="health-checkup-item wow fadeInUp">
                                        <div class="health-checkup-item-content">
                                            <h3>Haircut & Styling</h3>
                                            <p>Professional trimming and styling based on your dog’s breed and comfort.</p>
                                            <ul>
                                                <li>Full body haircut</li>
                                                <li>Face and paw trimming</li>
                                                <li>De-shedding and coat maintenance</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="health-checkup-item wow fadeInUp">
                                        <div class="health-checkup-item-content">
                                            <h3>Bath & Hygiene Care</h3>
                                            <p>Complete cleaning to keep your dog fresh, hygienic, and odor-free.</p>
                                            <ul>
                                                <li>Bathing with medicated or normal shampoo</li>
                                                <li>Ear cleaning and nail trimming</li>
                                                <li>Tick and flea cleaning (if required)</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Service Entry End -->
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

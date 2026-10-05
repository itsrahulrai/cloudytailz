@extends('frontend.layout.app')

@section('title', 'Vet Home Visit - Cloudytailz – Complete Dog & Cat Pet Care Services')
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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Vet Home Visit</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Vet Home Visit</li>
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
                                <img src="{{ asset_url('assets/images/services/vet-home-visit.png')}}" alt="Vet Home Visit">
                            </figure>
                        </div>
                        <!-- Page Single image End -->

                        <!-- Service Entry Start -->
                        <div class="service-entry">
                            <h2 class="text-anime-style-3">Vet Home Visit</h2>

                            <p class="wow fadeInUp">
                                At Cloudytailz, our vet home visit service brings professional veterinary care right to your
                                doorstep. We understand that taking your pet to a clinic can sometimes be stressful or
                                inconvenient. With our at-home service, your pet receives expert medical attention in a
                                familiar and comfortable environment, reducing anxiety and ensuring better care.
                            </p>

                            <p>
                                Whether it’s a routine check-up, vaccination, or treatment for an illness, our experienced
                                veterinarians provide personalized care at home. This service is ideal for pets who are
                                anxious, elderly, or require special attention, making the entire experience smooth and
                                hassle-free for both pets and pet owners.
                            </p>

                            <div class="health-checkup-box">
                                <h2 class="text-anime-style-3">What we include in vet home visit</h2>

                                <p class="wow fadeInUp" data-wow-delay="0.2s">
                                    Our home visit service focuses on comfort, convenience, and quality medical care to keep
                                    your pet healthy and stress-free.
                                </p>

                                <div class="health-checkup-item-list">

                                    <div class="health-checkup-item wow fadeInUp">
                                        <div class="health-checkup-item-content">
                                            <h3>At-Home Health Checkup</h3>
                                            <p>Comprehensive medical examination performed in your pet’s comfort zone.</p>
                                            <ul>
                                                <li>General health assessment</li>
                                                <li>Temperature and physical check</li>
                                                <li>Early detection of health issues</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="health-checkup-item wow fadeInUp">
                                        <div class="health-checkup-item-content">
                                            <h3>Treatment & Vaccination</h3>
                                            <p>Essential treatments and preventive care provided at your home.</p>
                                            <ul>
                                                <li>Vaccination services</li>
                                                <li>Basic treatment and medication</li>
                                                <li>Post-treatment care guidance</li>
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

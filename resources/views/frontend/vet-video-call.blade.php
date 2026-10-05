@extends('frontend.layout.app')

@section('title', 'Vet Video Call - nCloudytailz – Complete Dog & Cat Pet Care Services')
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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Vet Video Call</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Vet Video Call</li>
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
                                <img src="{{ asset_url('assets/images/services/vet-video-call.png')}}" alt="Vet Video Call">
                            </figure>
                        </div>
                        <!-- Page Single image End -->

                        <!-- Service Entry Start -->
                        <div class="service-entry">
                            <h2 class="text-anime-style-3">Vet Video Call</h2>

                            <p class="wow fadeInUp">
                                At Cloudytailz, our vet video call service allows you to connect with experienced
                                veterinarians from the comfort of your home. We understand that pets may need immediate
                                attention, and visiting a clinic is not always convenient. Through secure video
                                consultations, you can get expert advice, quick diagnosis, and proper guidance without any
                                hassle.
                            </p>

                            <p>
                                Whether your pet is showing unusual symptoms, needs follow-up care, or you simply want
                                professional advice, our online vet consultations are designed to save time and reduce
                                stress for both you and your pet. Our vets ensure clear communication and provide practical
                                solutions for your pet’s health and well-being.
                            </p>

                            <div class="health-checkup-box">
                                <h2 class="text-anime-style-3">What we include in vet video consultation</h2>

                                <p class="wow fadeInUp" data-wow-delay="0.2s">
                                    Our online consultation service focuses on quick support, expert guidance, and
                                    convenient care for your pet anytime, anywhere.
                                </p>

                                <div class="health-checkup-item-list">

                                    <div class="health-checkup-item wow fadeInUp">
                                        <div class="health-checkup-item-content">
                                            <h3>Online Health Consultation</h3>
                                            <p>Get professional veterinary advice through live video calls.</p>
                                            <ul>
                                                <li>Symptom evaluation and guidance</li>
                                                <li>General health check discussion</li>
                                                <li>Diet and lifestyle recommendations</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="health-checkup-item wow fadeInUp">
                                        <div class="health-checkup-item-content">
                                            <h3>Follow-up & Emergency Advice</h3>
                                            <p>Quick support for ongoing treatments and urgent concerns.</p>
                                            <ul>
                                                <li>Follow-up consultations</li>
                                                <li>Basic emergency guidance</li>
                                                <li>Medication and care instructions</li>
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

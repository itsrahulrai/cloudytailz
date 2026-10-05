@extends('frontend.layout.app')
@section('title', 'Cat Grooming | Cloudytailz – Complete Dog & Cat Pet Care Services')
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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Cat Grooming</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cat Grooming</li>
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
                                <img src="{{ asset_url('assets/images/services/cat-grooming.png') }}" alt="Cat Grooming">
                            </figure>
                        </div>
                        <!-- Page Single image End -->

                        <!-- Service Entry Start -->
                        <div class="service-entry">
                            <h2 class="text-anime-style-3">Cat Grooming</h2>

                            <p class="wow fadeInUp">
                                At Cloudytailz, our professional cat grooming services are designed to keep your feline
                                companion clean, comfortable, and stress-free. Regular grooming not only enhances your cat’s
                                appearance but also supports healthy skin, reduces shedding, and prevents matting. Our
                                gentle and experienced groomers understand the unique needs of cats and ensure a calm, safe,
                                and hygienic grooming experience.
                            </p>

                            <p>
                                From brushing and bathing to nail trimming and ear cleaning, we provide complete grooming
                                care tailored to your cat’s breed, coat type, and behavior. At Cloudytailz, we focus on
                                making grooming a relaxing experience while maintaining the highest standards of care and
                                hygiene.
                            </p>

                            <div class="health-checkup-box">
                                <h2 class="text-anime-style-3">What we include in cat grooming</h2>

                                <p class="wow fadeInUp" data-wow-delay="0.2s">
                                    Our cat grooming service covers coat care, hygiene, and overall comfort. We ensure your
                                    cat stays clean, healthy, and well-maintained with gentle handling and expert care.
                                </p>

                                <div class="health-checkup-item-list">

                                    <div class="health-checkup-item wow fadeInUp">
                                        <div class="health-checkup-item-content">
                                            <h3>Coat & Skin Care</h3>
                                            <p>Maintaining a healthy coat and preventing tangles or skin issues.</p>
                                            <ul>
                                                <li>Brushing and de-shedding</li>
                                                <li>Removal of mats and tangles</li>
                                                <li>Skin health check and coat conditioning</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="health-checkup-item wow fadeInUp">
                                        <div class="health-checkup-item-content">
                                            <h3>Hygiene & Cleaning</h3>
                                            <p>Keeping your cat clean and fresh with safe grooming practices.</p>
                                            <ul>
                                                <li>Gentle bathing with cat-friendly products</li>
                                                <li>Ear cleaning and hygiene care</li>
                                                <li>Nail trimming for safety and comfort</li>
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

                    @include('frontend.side-bar')

                </div>
            </div>
        </div>
    </div>
    <!-- Page Service Single End -->


@endsection

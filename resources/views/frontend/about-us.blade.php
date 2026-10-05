@extends('frontend.layout.app')

@section('title', 'About us | Cloudytailz – Complete Dog & Cat Pet Care Services')
@section('meta_description', 'Cloudytailz offers premium pet care services for dogs and cats including grooming, healthy
    food, vet support, and personalized care to keep your furry friends happy and healthy.')
@section('meta_keywords', 'Cloudytailz, pet care, dog care, cat care, pet grooming, pet food, vet services, pet services
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
                    <h1 class="text-anime-style-3" data-cursor="-opaque">About us</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->

<!-- About Us Section Start -->
<div class="about-us-prime">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-6">
                <!-- About Us Image Start -->
                <div class="about-us-image-box-prime wow fadeInUp" data-wow-delay="0.2s">
                    <!-- About Us Image Start -->
                    <div class="about-us-image-prime">
                       <figure>
                            <img src="{{ asset_url('assets/images/about/about-us-image-prime.jpg')}}" alt="">
                        </figure>
                    </div>
                    <!-- About Us Image End -->

                    <!-- Contact us Circle Start -->
                    <div class="contact-us-circle-prime">
                        <a href="{{route('contact')}}">
                            <img src="{{ asset_url('assets/images/about/contact-us-circle.svg')}}" alt="">
                        </a>
                    </div>
                    <!-- Contact us Circle End -->
                </div>
                <!-- About Us Image End -->
            </div>

            <div class="col-xl-6">
                <!-- About Us Content Start -->
                <div class="about-us-content-prime">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">About Cloudytailz</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            Caring for your pets like family
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            At Cloudytailz, we are dedicated to providing trusted care, grooming, and wellness support for dogs and cats. With a passion for pets and a focus on quality, we ensure every furry friend receives the love, attention, and care they truly deserve.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Us Body Start -->
                    <div class="about-us-body-prime">
                        <!-- About Body Item List Start -->
                        <div class="about-body-item-list-prime wow fadeInUp">
                            <!-- About Body Item Start -->
                            <div class="about-body-item-prime">
                                <div class="icon-box">
                                    <img src="{{ asset_url('assets/images/icon/icon-about-1-prime.svg')}}" alt="">
                                </div>
                                <div class="about-body-item-content-prime">
                                    <h2><span class="counter">05</span>+</h2>
                                    <p>Years of Trusted Service</p>
                                </div>
                            </div>
                            <!-- About Body Item End -->

                            <!-- About Body Item Start -->
                            <div class="about-body-item-prime">
                                <div class="icon-box">
                                    <img src="{{ asset_url('assets/images/icon/icon-about-2-prime.svg')}}" alt="">
                                </div>
                                <div class="about-body-item-content-prime">
                                    <h2><span class="counter">1</span>k+</h2>
                                    <p>1000+ Happy Pets Treated</p>
                                </div>
                            </div>
                            <!-- About Body Item End -->

                            <!-- About Body Item Start -->
                            <div class="about-body-item-prime">
                                <div class="icon-box">
                                    <img src="{{ asset_url('assets/images/icon/icon-about-3-prime.svg')}}" alt="">
                                </div>
                                <div class="about-body-item-content-prime">
                                    <h2>24/7</h2>
                                    <p>Years of Trusted Service</p>
                                </div>
                            </div>
                            <!-- About Body Item End -->
                        </div>
                        <!-- About Body Item List End -->

                        <!-- About Body Image Start -->
                        <div class="about-body-image-box-prime wow fadeInUp" data-wow-delay="0.2s">
                            <div class="about-pet-care-circle-prime">
                                <a href="{{route('contact')}}">
                                    <img src="{{ asset_url('assets/images/icon/pet-care-now-circle-prime.svg')}}" alt="">
                                </a>
                            </div>
                            <div class="about-body-image-prime">
                                <figure>
                                    <img src="{{ asset_url('assets/images/about/about-small.png')}}" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- About Body Image End -->
                    </div>
                    <!-- About Us Body End -->

                    <!-- About Us Footer Start -->
                    <div class="about-us-footer-prime wow fadeInUp" data-wow-delay="0.4s">
                        <div class="about-us-btn-prime">
                            <a href="{{route('contact')}}" class="btn-default">Contact us</a>
                        </div>
                        <div class="about-us-contact-box-prime">
                            <div class="icon-box">
                                <img src="{{ asset_url('assets/images/icon/icon-phone-white.svg')}}" alt="">
                            </div>
                            <div class="about-contact-content-box-prime">
                                <h3>Call Us!</h3>
                                <p><a href="tel:9429694375">+91 9429694375</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- About Us Footer End -->
                </div>
                <!-- About Us Content End -->
            </div>
        </div>
    </div>
</div>
<!-- About Us Section End -->



<!-- Why Choose Us Section Start -->
<div class="why-choose-us-prime">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Why Choose Content Start -->
                <div class="why-choose-us-content-prime">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Why Choose Cloudytailz</h3>

                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            Trusted <span class="icon-box"><img src="{{ asset_url('assets/images/icon/icon-why-choose-us-title-1-prime.svg')}}" alt=""></span> Pet Care Services for Your
                            <span class="icon-box"><img src="{{ asset_url('assets/images/icon/icon-why-choose-us-title-2-prime.svg')}}" alt=""></span> Dogs & Cats with
                            <span class="icon-box"><img src="{{ asset_url('assets/images/icon/icon-why-choose-us-title-3-prime.svg')}}" alt=""></span> Love, Safety & Expertise
                        </h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Why Choose Button Start -->
                    <div class="why-choose-us-btn-prime">
                        <a href="" class="btn-default" data-bs-toggle="modal" data-bs-target="#appointmentModal2">Book a Service Now</a>
                    </div>
                    <!-- Why Choose Button End -->
                </div>
                <!-- Why Choose Content End -->

                <!-- Why Choose Us Image Start -->
                <div class="why-choose-us-image-prime">
                    <figure>
                        <img src="{{ asset_url('assets/images/services/why-choose-us-image-prime.png')}}" alt="">
                    </figure>
                </div>
                <!-- Why Choose Us Image End -->

                <!-- Why Choose Us Footer Start -->
                <div class="why-choose-us-footer-prime wow fadeInUp" data-wow-delay="0.4s">
                    <!-- Why Choose Footer List Start -->
                    <div class="why-choose-footer-list-prime">
                        <ul>
                            <li>Dog Care Clinic</li>
                            <li>Cat Care Services</li>
                            <li>Pet Vaccination</li>
                            <li>Pet Grooming</li>
                            <li>Emergency Pet Care</li>
                        </ul>
                    </div>
                    <!-- Why Choose Footer List End -->

                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text">
                        <p>We provide trusted and compassionate care for your cats and dogs – from routine checkups to advanced treatments. <a href="contact.html">Contact our clinic today.</a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
                <!-- About Us Footer End -->
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us Section End -->

<!-- CTA Section Start -->
<div class="cta-box bg-section dark-section parallaxie">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- Cta Box Content Start -->
                <div class="cta-box-content">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Book Your Pet’s Appointment</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            Trusted Care for Your Dogs & Cats – Right When You Need It
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Our experienced pet care team is here to provide grooming, hygiene, and medical support for your furry friends. Contact us today to schedule a visit and give your pet the care they deserve.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Cta Box Button Start -->
                    <div class="cta-box-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="tel:9429694375" class="btn-default btn-highlighted">Call Us: +91 9429694375</a>
                    </div>
                    <!-- Cta Box Button End -->
                </div>
                <!-- Cta Box Content End -->
            </div>

            <div class="col-lg-12">
                <!-- Cta Box Image Start -->
                <div class="cta-box-image">
                   <figure>
                        <img src="{{ asset_url('assets/images/section/cta-1.png')}}" alt="">
                    </figure>
                </div>
                <!-- Cta Box Image End -->
            </div>
        </div>
    </div>
</div>
<!-- CTA Section End -->

<!-- What We Do Section Start -->
{{-- <div class="what-we-do-prime">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <!-- What We Image Box Start -->
                <div class="what-we-image-box-prime wow fadeInUp" data-wow-delay="0.2s">
                    <!-- What We Image Start -->
                    <div class="what-we-image-prime">
                        <figure class="image-anime">
                            <img src="{{ asset_url('assets/images/section/what-we-image-prime.jpg')}}" alt="">
                        </figure>
                    </div>
                    <!-- What We Image End -->

                    <!-- What We Customer Box Start -->
                    <div class="what-we-customer-box-prime">
                        <!-- What We Customer Content Start -->
                        <div class="what-we-customer-content-prime">
                            <h3>98% Client Satisfaction Rate</h3>
                        </div>
                        <!-- What We Customer Content End -->
                    </div>
                    <!-- What We Customer Box End -->
                </div>
                <!-- What We Image Box End -->
            </div>

            <div class="col-xl-7">
                <!-- What We Content Start -->
                <div class="what-we-content-prime">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">What We Do</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Caring for Your Pets Like Family</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            At our Dog & Cat Pet Care Clinic, we are dedicated to keeping your furry companions healthy, happy, and well-groomed. Our expert team offers complete grooming, hygiene care, and essential treatments with love and professionalism, ensuring your pets receive the best care at every stage of life.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- What We Body Start -->
                    <div class="what-we-body-prime wow fadeInUp" data-wow-delay="0.4s">
                        <!-- What We Body List Start -->
                        <div class="what-we-body-list-prime">
                            <!-- What We Body Item Start -->
                            <div class="what-we-body-item-prime">
                                <div class="icon-box">
                                    <img src="{{ asset_url('assets/images/icon/icon-what-we-item-1-prime.svg')}}" alt="">
                                </div>
                                <div class="what-we-body-item-content-prime">
                                    <h3>Routine Health Checkups</h3>
                                    <p>Regular checkups to keep your pet healthy and detect issues early. </p>
                                </div>
                            </div>
                            <!-- What We Body Item End -->

                            <!-- What We Body Item Start -->
                            <div class="what-we-body-item-prime">
                                <div class="icon-box">
                                    <img src="{{ asset_url('assets/images/icon/icon-what-we-item-2-prime.svg')}}" alt="">
                                </div>
                                <div class="what-we-body-item-content-prime">
                                    <h3>Diagnostic Testing</h3>
                                    <p>Accurate tests to identify health problems and ensure proper treatment. </p>
                                </div>
                            </div>
                            <!-- What We Body Item End -->

                            <!-- What We Body Item Start -->
                            <div class="what-we-body-item-prime">
                                <div class="icon-box">
                                    <img src="{{ asset_url('assets/images/icon/icon-what-we-item-3-prime.svg')}}" alt="">
                                </div>
                                <div class="what-we-body-item-content-prime">
                                    <h3>Weight Management</h3>
                                    <p>Balanced care to maintain ideal weight and improve your pet’s fitness. </p>
                                </div>
                            </div>
                            <!-- What We Body Item End -->
                        </div>
                        <!-- What We Body List End -->

                        <!-- What We Counter Box Start -->
                        <div class="what-we-counter-box-prime">
                            <!-- What We Counter Item Start -->
                            <div class="what-we-counter-item-prime">
                                <div class="what-we-counter-item-content-prime">
                                    <h2><span class="counter">5</span>+</h2>
                                    <p>Year of Trusted Service</p>
                                </div>
                                <div class="what-we-counter-item-image-prime">
                                    <figure>
                                        <img src="{{ asset_url('assets/images/section/what-we-counter-item-image-1-prime.png')}}" alt="">
                                    </figure>
                                </div>
                            </div>
                            <!-- What We Counter Item End -->

                            <!-- What We Counter Item Start -->
                            <div class="what-we-counter-item-prime">
                                <div class="what-we-counter-item-content-prime">
                                    <h2><span class="counter">24</span>/7</h2>
                                    <p>Emergency Care Available</p>
                                </div>
                                <div class="what-we-counter-item-image-prime">
                                    <figure>
                                        <img src="{{ asset_url('assets/images/section/what-we-counter-item-image-2-prime.png')}}" alt="">
                                    </figure>
                                </div>
                            </div>
                            <!-- What We Counter Item End -->
                        </div>
                        <!-- What We Counter Box End -->
                    </div>
                    <!-- What We Body End -->
                </div>
                <!-- What We Content End -->
            </div>
        </div>
    </div>
</div> --}}
<!-- What We Do Section End -->

<!-- What We Do Section Start -->
<div class="what-we-do-prime">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <!-- What We Image Box Start -->
                <div class="what-we-image-box-prime wow fadeInUp" data-wow-delay="0.2s">
                    <!-- What We Image Start -->
                    <div class="what-we-image-prime">
                        <figure class="image-anime">
                            <img src="{{ asset_url('assets/images/section/what-we-image-prime.png')}}" alt="">
                        </figure>
                    </div>
                    <!-- What We Image End -->

                    <!-- What We Customer Box Start -->
                    <div class="what-we-customer-box-prime">
                        <!-- What We Customer Content Start -->
                        <div class="what-we-customer-content-prime">
                            <h3>98% Client Satisfaction Rate</h3>
                        </div>
                        <!-- What We Customer Content End -->
                    </div>
                    <!-- What We Customer Box End -->
                </div>
                <!-- What We Image Box End -->
            </div>

            <div class="col-xl-7">
                <!-- What We Content Start -->
                <div class="what-we-content-prime">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">What We Do</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Caring for Your Pets Like Family</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            At our Dog & Cat Pet Care Clinic, we are dedicated to keeping your furry companions healthy,
                            happy, and well-groomed. Our expert team offers complete grooming, hygiene care, and
                            essential treatments with love and professionalism, ensuring your pets receive the best care
                            at every stage of life.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- What We Body Start -->
                    <div class="what-we-body-prime wow fadeInUp" data-wow-delay="0.4s">
                        <!-- What We Body List Start -->
                        <div class="what-we-body-list-prime">
                            <!-- What We Body Item Start -->
                            <div class="what-we-body-item-prime">
                                <div class="icon-box">
                                    <img src="{{ asset_url('assets/images/icon/icon-what-we-item-1-prime.svg')}}" alt="">
                                </div>
                                <div class="what-we-body-item-content-prime">
                                    <h3>Routine Health Checkups</h3>
                                    <p>Regular checkups to keep your pet healthy and detect issues early. </p>
                                </div>
                            </div>
                            <!-- What We Body Item End -->

                            <!-- What We Body Item Start -->
                            <div class="what-we-body-item-prime">
                                <div class="icon-box">
                                    <img src="{{ asset_url('assets/images/icon/icon-what-we-item-2-prime.svg')}}" alt="">
                                </div>
                                <div class="what-we-body-item-content-prime">
                                    <h3>Diagnostic Testing</h3>
                                    <p>Accurate tests to identify health problems and ensure proper treatment. </p>
                                </div>
                            </div>
                            <!-- What We Body Item End -->

                            <!-- What We Body Item Start -->
                            <div class="what-we-body-item-prime">
                                <div class="icon-box">
                                    <img src="{{ asset_url('assets/images/icon/icon-what-we-item-3-prime.svg')}}" alt="">
                                </div>
                                <div class="what-we-body-item-content-prime">
                                    <h3>Weight Management</h3>
                                    <p>Balanced care to maintain ideal weight and improve your pet’s fitness. </p>
                                </div>
                            </div>
                            <!-- What We Body Item End -->
                        </div>
                        <!-- What We Body List End -->

                        <!-- What We Counter Box Start -->
                        <div class="what-we-counter-box-prime">
                            <!-- What We Counter Item Start -->
                            <div class="what-we-counter-item-prime">
                                <div class="what-we-counter-item-content-prime">
                                    <h2><span class="counter">5</span>+</h2>
                                    <p>Year of Trusted Service</p>
                                </div>
                                <div class="what-we-counter-item-image-prime">
                                    <figure>
                                        <img src="{{ asset_url('assets/images/section/what-we-counter-item-image-1-prime1.png')}}"
                                            alt="">
                                    </figure>
                                </div>
                            </div>
                            <!-- What We Counter Item End -->

                            <!-- What We Counter Item Start -->
                            <div class="what-we-counter-item-prime">  
                                <div class="what-we-counter-item-content-prime">
                                    <h2><span class="counter">24</span>/7</h2>
                                    <p>Emergency Care Available</p>
                                </div>
                                <div class="what-we-counter-item-image-prime">
                                    <figure>
                                        <img src="{{ asset_url('assets/images/section/what-we-counter-item-image-2-prime2.png')}}"
                                            alt="">
                                    </figure>
                                </div>
                            </div>
                            <!-- What We Counter Item End -->
                        </div>
                        <!-- What We Counter Box End -->
                    </div>
                    <!-- What We Body End -->
                </div>
                <!-- What We Content End -->
            </div>
        </div>
    </div>
</div>
<!-- What We Do Section End -->


@endsection

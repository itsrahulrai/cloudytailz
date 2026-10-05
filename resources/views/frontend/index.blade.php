@extends('frontend.layout.app')

@section('title', 'Cloudytailz – Complete Dog & Cat Pet Care Services')
@section('meta_description', 'Cloudytailz offers premium pet care services for dogs and cats including grooming, healthy
    food, vet support, and personalized care to keep your furry friends happy and healthy.')
@section('meta_keywords', 'Cloudytailz, pet care, dog care, cat care, pet grooming, pet food, vet services, pet services
    India, dog grooming, cat grooming, pet clinic, pet health care')
@section('meta_robots', 'index, follow')
@section('canonical', url()->current())
@section('content')



<!-- Hero Section Start -->
<div class="hero bg-section dark-section parallaxie">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-6">
                <!-- Hero Content Start -->
                <div class="hero-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Cloudytailz Pet Care</h3>
                        <h1 class="text-anime-style-3" data-cursor="-opaque">
                            Care your pets deserve
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Cloudytailz provides trusted care, expert guidance, and quality essentials to keep your dogs
                            and cats healthy and happy every day.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Hero Content Body Start -->
                    <div class="hero-content-body wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Hero Button Start -->
                        <div class="hero-btn">
                            <a href="#" class="btn-default btn-highlighted" data-bs-toggle="modal"
                                data-bs-target="#appointmentModal2">
                                Book An Appointment
                            </a>
                        </div>
                        <!-- Hero Button End -->

                        <!-- Video Play Button Start -->
                        <!--<div class="video-play-button">-->
                        <!--    <a href="" class="popup-video bg-effect" data-cursor-text="Play">-->
                        <!--        <i class="fa-solid fa-play"></i>-->
                        <!--    </a>-->
                        <!--    <h3>Watch Our Video</h3>-->
                        <!--</div>-->
                        <!-- Video Play Button End -->
                    </div>
                    <!-- Hero Content Body End -->

                    <!-- Hero Client Box Start -->
                    <div class="hero-client-box wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Satisfy Client Images Start -->
                        <!--<div class="satisfy-client-images">-->
                        <!--    <div class="satisfy-client-image">-->
                        <!--        <figure class="image-anime">-->
                        <!--            <img src="{{ asset_url('assets/images/author/author-1.jpg')}}" alt="">-->
                        <!--        </figure>-->
                        <!--    </div>-->
                        <!--    <div class="satisfy-client-image">-->
                        <!--        <figure class="image-anime">-->
                        <!--            <img src="{{ asset_url('assets/images/author/author-2.jpg')}}" alt="">-->
                        <!--        </figure>-->
                        <!--    </div>-->
                        <!--    <div class="satisfy-client-image">-->
                        <!--        <figure class="image-anime">-->
                        <!--            <img src="{{ asset_url('assets/images/author/author-3.jpg')}}" alt="">-->
                        <!--        </figure>-->
                        <!--    </div>-->
                        <!--    <div class="satisfy-client-image">-->
                        <!--        <figure class="image-anime">-->
                        <!--            <img src="{{ asset_url('assets/images/author/author-4.jpg')}}" alt="">-->
                        <!--        </figure>-->
                        <!--    </div>-->
                        <!--    <div class="satisfy-client-image">-->
                        <!--        <figure class="image-anime">-->
                        <!--            <img src="{{ asset_url('assets/images/author/author-5.jpg')}}" alt="">-->
                        <!--        </figure>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!-- Satisfy Client Images End -->

                        <!-- Satisfy Client Content Start -->
                        <div class="satisfy-client-content">
                            <p>Trusted by pet owners for our reliable care, quality services, and genuine love for dogs
                                and cats.</p>
                        </div>
                        <!-- Satisfy Client Content End -->
                    </div>
                    <!-- Hero Client Box End -->
                </div>
                <!-- Hero Content End -->
            </div>

            <div class="col-xl-6">
                <!-- Hero Image Start -->
                <div class="hero-image">
                    <figure>
                        <img src="{{ asset_url('assets/images/hero/hero-image1.png')}}" alt="">
                    </figure>
                </div>
                <!-- Hero Image End -->
            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->

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
                            At Cloudytailz, we are dedicated to providing trusted care, grooming, and wellness support
                            for dogs and cats. With a passion for pets and a focus on quality, we ensure every furry
                            friend receives the love, attention, and care they truly deserve.
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
                            <a href="{{route('about')}}" class="btn-default">More About Us</a>
                        </div>
                        <div class="about-us-contact-box-prime">
                            <div class="icon-box">
                                <img src="{{ asset_url('assets/images/icon/icon-phone-white.svg')}}" alt="">
                            </div>
                            <div class="about-contact-content-box-prime">
                                <h3>Call Us!</h3>
                                {{-- <p><a href="tel:8743988619">+91 8743988619</a></p> --}}
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

<!-- Service Section Start -->
<div class="our-services-prime bg-section">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 style="color: var(--white-color);" class="wow fadeInUp">Veterinary Services</h3>
                    <h2 class="text-anime-style-3 new-head" data-cursor="-opaque">Comprehensive care services for every beloved
                        pet</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item-prime wow fadeInUp">
                    <!-- Service Image Start -->
                    <div class="service-item-image-prime">
                        <a href="{{route('dog-grooming')}}" data-cursor-text="View">
                            <figure>
                                <img src="{{ asset_url('assets/images/services/dog-grooming.jpg')}}" alt="Dog Grooming">
                            </figure>
                        </a>
                    </div>
                    <!-- Service Image End -->

                    <!-- Service Content Start -->
                    <div class="service-item-content-prime">
                        <h2><a href="{{route('dog-grooming')}}">Dog Grooming</a></h2>
                    </div>
                    <!-- Service Content End -->
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-xl-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item-prime wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Service Image Start -->
                    <div class="service-item-image-prime">
                        <a href="{{route('cat-grooming')}}" data-cursor-text="View">
                            <figure>
                                <img src="{{ asset_url('assets/images/services/cat-grooming.jpg')}}" alt="Cat Grooming">
                            </figure>
                        </a>
                    </div>
                    <!-- Service Image End -->

                    <!-- Service Content Start -->
                    <div class="service-item-content-prime">
                        <h2><a href="{{route('cat-grooming')}}">Cat Grooming</a></h2>
                    </div>
                    <!-- Service Content End -->
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-xl-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item-prime wow fadeInUp" data-wow-delay="0.4s">
                    <!-- Service Image Start -->
                    <div class="service-item-image-prime">
                        <a href="{{route('vet-video-call')}}" data-cursor-text="View">
                            <figure>
                                <img src="{{ asset_url('assets/images/services/vet-video-call-01.jpg')}}" alt="Vet Video Call">
                            </figure>
                        </a>
                    </div>
                    <!-- Service Image End -->

                    <!-- Service Content Start -->
                    <div class="service-item-content-prime">
                        <h2><a href="{{route('vet-video-call')}}">Vet Video Call</a></h2>
                    </div>
                    <!-- Service Content End -->
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-xl-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item-prime wow fadeInUp" data-wow-delay="0.6s">
                    <!-- Service Image Start -->
                    <div class="service-item-image-prime">
                        <a href="{{route('vet-home-visit')}}" data-cursor-text="View">
                            <figure>
                                <img src="{{ asset_url('assets/images/services/vet-home-visit.jpg')}}" alt="Vet Home Visit">
                            </figure>
                        </a>
                    </div>
                    <!-- Service Image End -->

                    <!-- Service Content Start -->
                    <div class="service-item-content-prime">
                        <h2><a href="{{route('vet-home-visit')}}">Vet Home Visit</a></h2>
                    </div>
                    <!-- Service Content End -->
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-12">
                <!-- Section Footer Text Start -->
                <div class="section-footer-text wow fadeInUp" data-wow-delay="0.4s">
                    <p style="color: var(--white-color);">Give your pets the love, care, and professional attention they deserve with Cloudytailz – your
                        trusted partner for dog and cat care services.</p>
                    <ul style="color: #fff">
                        <li style="color: var(--white-color);"><span class="counter">4.9</span>/5</li>
                        <li style="color: var(--white-color);">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </li>
                        <li style="color: var(--white-color);">Trusted by 1000+ Happy Pet Owners</li>
                    </ul>
                </div>
                <!-- Section Footer Text End -->
            </div>
        </div>
    </div>
</div>
<!-- Service Section End -->

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
                            Trusted <span class="icon-box"><img src="{{ asset_url('assets/images/icon/icon-why-choose-us-title-1-prime.svg')}}"
                                    alt=""></span> Pet Care Services for Your
                            <span class="icon-box"><img src="{{ asset_url('assets/images/icon/icon-why-choose-us-title-2-prime.svg')}}"
                                    alt=""></span> Dogs & Cats with
                            <span class="icon-box"><img src="{{ asset_url('assets/images/icon/icon-why-choose-us-title-3-prime.svg')}}"
                                    alt=""></span> Love, Safety & Expertise
                        </h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Why Choose Button Start -->
                    <div class="why-choose-us-btn-prime">
                        <a href="" class="btn-default" data-bs-toggle="modal"
                            data-bs-target="#appointmentModal2">Book a Service Now</a>
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
                        <p>We provide trusted and compassionate care for your cats and dogs – from routine checkups to
                            advanced treatments. <a href="{{route('contact')}}">Contact our clinic today.</a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
                <!-- About Us Footer End -->
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us Section End -->

<!-- Our Pricing Section Start -->
<div class="our-pricing-gold bg-section">
    <div class="container">
        <div class="row section-row">
            <div class="col-xl-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 style="color: var(--white-color);" class="wow fadeInUp">Our Pricing Plans</h3>
                    <h2 class="text-anime-style-3 new-head" data-cursor="-opaque">Affordable veterinary pricing plans for every
                        pet</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4 col-md-6">
                <!-- Pricing Item Start -->
                <div class="pricing-item-gold wow fadeInUp">
                    <div class="icon-box">
                        <img src="{{ asset_url('assets/images/icon-pricing-item-1-gold.svg')}}" alt="">
                    </div>
                    <div class="pricing-item-content-gold">
                        <h3>HAIR STYLING PACKAGE</h3>
                        <p>Give your pet a complete grooming makeover with our all-in-one hair styling package, designed
                            for comfort, hygiene, and a neat appearance.</p>
                        <h2>
                            <span class="old-price">₹1700</span>
                            <span class="new-price">₹1500</span>
                            <sub>/Per Visit</sub>
                            <span class="offer-badge">12% OFF</span>
                        </h2>
                    </div>
                    <div class="pricing-item-list-gold">
                        <ul>
                            <li>Full Body Haircut, Trimming, zero cut (Included)</li>
                            <li>Combing/Brushing</li>
                            <li>Nail Cutting</li>
                            <li>Eye Cleaning</li>
                            <li>Ear Cleaning</li>
                            <li>Sanitary Cutting</li>
                            <li>(Eyes, Ears, and under paws hair)</li>
                        </ul>
                    </div>
                    <div class="pricing-item-btn-gold">
                        <a href="#" class="btn-default open-booking" data-package="HAIR STYLING PACKAGE">
                            Get Started With Plan
                        </a>
                    </div>
                </div>
                <!-- Pricing Item End -->
            </div>

            <div class="col-xl-4 col-md-6">
                <!-- Pricing Item Start -->
                <div class="pricing-item-gold wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon-box">
                        <img src="{{ asset_url('assets/images/icon-pricing-item-2-gold.svg')}}" alt="">
                    </div>
                    <div class="pricing-item-content-gold">
                        <h3>SHOWER & HYGIENE PACKAGE</h3>
                        <p>Keep your pet fresh, clean, and healthy with our complete hygiene care package, designed to
                            maintain overall cleanliness and comfort.</p>
                        <h2>
                            <span class="old-price">₹1700</span>
                            <span class="new-price">₹1500</span>
                            <sub>/Per Visit</sub>
                            <span class="offer-badge">12% OFF</span>
                        </h2>
                    </div>
                    <div class="pricing-item-list-gold">
                        <ul>
                            <li>Bath with Shampoo and Conditioner</li>
                            <li>Blow Dry</li>
                            <li>Combing/ Brushing</li>
                            <li>Nail Cutting</li>
                            <li>Eye Cleaning</li>
                            <li>Ear Cleaning</li>

                        </ul>
                        <div class="extra-items" id="extra-shower"
                            style="overflow:hidden; max-height:0; transition: max-height 0.35s ease;">
                            <ul>
                                <li>Paw Massage</li>
                                <li>Sanitary Cutting (Eyes, Ears, and under paws hair)</li>
                                <li>Mouth Spray</li>
                                <li>Teeth Cleaning (Only if Pet Allow)</li>
                            </ul>
                        </div>
                        <button class="read-more-btn" id="btn-shower"
                            onclick="toggleList('extra-shower', 'btn-shower')"
                            style="background:#FCEBEB; color:#A32D2D; border:none; border-radius:6px; font-size:13px; font-weight:500; padding:6px 16px; margin-top:8px; cursor:pointer;">+
                            Read More</button>
                    </div>
                    <div class="pricing-item-btn-gold">
                        <a href="#" class="btn-default open-booking" data-package="SHOWER & HYGIENE PACKAGE">
                            Get Started With Plan
                        </a>
                    </div>
                </div>
                <!-- Pricing Item End -->
            </div>

            <div class="col-xl-4 col-md-6">
                <!-- Pricing Item Start -->
                <div class="pricing-item-gold wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon-box">
                        <img src="{{ asset_url('assets/images/icon-pricing-item-3-gold.svg')}}" alt="">
                    </div>
                    <div class="pricing-item-content-gold">
                        <h3>GROOMING TIP TO TOE PACKAGE</h3>
                        <p>Give your pet the ultimate grooming experience with our head-to-tail care package, ensuring
                            complete cleanliness, style, and relaxation.</p>
                        <h2>
                            <span class="old-price">₹2200</span>
                            <span class="new-price">₹2000</span>
                            <sub>/Per Visit</sub>
                            <span class="offer-badge">9% OFF</span>
                        </h2>
                    </div>
                    <div class="pricing-item-list-gold">
                        <ul>
                            <li>Full Body Haircut, Trimming, zero cut (Included)</li>
                            <li>Bath with Shampoo and Conditioner</li>
                            <li>Blow Dry</li>
                            <li>Combing/ Brushing</li>
                            <li>Nail Cutting</li>
                            <li>Eye Cleaning</li>
                        </ul>
                        <div class="extra-items" id="extra-tiptoe"
                            style="overflow:hidden; max-height:0; transition: max-height 0.35s ease;">
                            <ul><br>
                                <li>Ear Cleaning</li>
                                <li>Paw Massage</li>
                                <li>Sanitary Cutting (Eyes, Ears, and under paws hair)</li>
                                <li>Mouth Spray</li>
                                <li>Teeth Cleaning (Only if Pet Allow)</li>
                            </ul>
                        </div>
                        <button class="read-more-btn" id="btn-tiptoe"
                            onclick="toggleList('extra-tiptoe', 'btn-tiptoe')"
                            style="background:#FCEBEB; color:#A32D2D; border:none; border-radius:6px; font-size:13px; font-weight:500; padding:6px 16px; margin-top:8px; cursor:pointer;">+
                            Read More</button>
                    </div>
                    <div class="pricing-item-btn-gold">
                        <a href="#" class="btn-default open-booking" data-package="FULL GROOMING PACKAGE">
                            Get Started With Plan
                        </a>
                    </div>
                </div>
                <!-- Pricing Item End -->
            </div>

            <div class="col-lg-12">
                <!-- Pricing Benefits List Start -->
                <div class="pricing-benefit-list-gold wow fadeInUp" data-wow-delay="0.4s">
                    <ul>
                        {{-- <li class="new-head"><img src="{{ asset_url('assets/images/icon/icon-pricing-benefit-1.svg')}}" alt="">Get 30 day free trial
                        </li> --}}
                        <li class="new-head"><img src="{{ asset_url('assets/images/icon/icon-pricing-benefit-2.svg')}}" alt="">No any hidden fees pay
                        </li>
                        <li class="new-head"><img src="{{ asset_url('assets/images/icon/icon-pricing-benefit-3.svg')}}" alt="">You can cancel anytime
                        </li>
                    </ul>
                </div>
                <!-- Pricing Benefits List End -->
            </div>
        </div>


    </div>
</div>
<!-- Our Pricing Section End -->

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
                            Our experienced pet care team is here to provide grooming, hygiene, and medical support for
                            your furry friends. Contact us today to schedule a visit and give your pet the care they
                            deserve.
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

<!-- Our Faqs Section Start -->
<div class="our-faqs">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <!-- Faqs Content Start -->
                <div class="faqs-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Frequently Asked Questions</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            Expert answers for your dog & cat care needs
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Find clear and helpful answers to common questions about caring for your dogs and cats,
                            including feeding, grooming, health, and daily routines.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Faqs Button Start -->

                    <!-- Faqs Button End -->
                </div>
                <!-- Faqs Content End -->
            </div>

            <div class="col-xl-7">
                <!-- FAQ Accordion Start -->
                <div class="faq-accordion" id="accordion">
                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                Q1. How often should my dog or cat visit the vet?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" role="region"
                            aria-labelledby="heading1" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>Dogs and cats should have a routine veterinary checkup at least once a year. Puppies,
                                    kittens, and senior pets may need more frequent visits to monitor growth,
                                    vaccinations, and age-related health conditions.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item End -->

                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Q2. What should I feed my dog or cat daily?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" role="region"
                            aria-labelledby="heading2" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>A balanced diet with high-quality pet food is essential for both dogs and cats.
                                    Choose food based on their age, breed, and health condition, and always ensure they
                                    have access to fresh, clean water.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item End -->

                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Q3. How often should I groom my pet?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" role="region"
                            aria-labelledby="heading3" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>Regular grooming is important for hygiene and comfort. Dogs may need weekly brushing
                                    and occasional baths, while cats usually groom themselves but still benefit from
                                    brushing to reduce shedding and hairballs.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item End -->

                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Q4. What vaccinations are important for dogs and cats?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" role="region"
                            aria-labelledby="heading4" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>Core vaccinations protect pets from serious diseases like rabies, distemper, and
                                    parvovirus in dogs, and feline panleukopenia and calicivirus in cats. Your vet will
                                    guide you on the proper vaccination schedule.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item End -->

                </div>
                <!-- FAQ Accordion End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Faqs Section End -->

<!-- Our Testimonial Section Start -->
<div class="our-testimonial bg-section">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 style="color: var(--white-color);" class="wow fadeInUp">Our Testimonials</h3>
                    <h2 style="color: var(--white-color);" class="text-anime-style-3" data-cursor="-opaque">Heartfelt experiences shared by our happy
                        clients</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3">
                <!-- Testimonial Rating Box Start -->
                <div class="testimonial-rating-box wow fadeInUp">
                    <!-- Testimonial Rating Counter Start -->
                    <div class="testimonial-rating-counter">
                        <h2><span class="counter">4.9</span><sub>/5.0</sub></h2>
                        <span class="testimonial-rating-star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                        <h3>(50 Reviews)</h3>
                    </div>
                    <!-- Testimonial Rating Counter End -->

                    <!-- Testimonial rating Counter Content Start -->
                    <div class="testimonial-rating-counter-content">
                        <h3>Helping Dogs & Cats Feel Calm and Comfortable During Every Vet Visit</h3>
                    </div>
                    <!-- Testimonial rating Counter Content End -->
                </div>
                <!-- Testimonial Rating Box End -->
            </div>


            <div class="col-xl-9">
                <!-- Testimonial Slider Start -->
                <div class="testimonial-slider wow fadeInUp" data-wow-delay="0.2s">
                    <div class="swiper">
                        <div class="swiper-wrapper" data-cursor-text="Drag">


                             <!--New Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-item-header">
                                        <div class="testimonial-item-quote">
                                            <img src="{{ asset_url('assets/images/icon/testimonial-quote.svg')}}" alt="">
                                        </div>
                                        <div class="testimonial-item-rating">
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="testimonial-item-body">
                                        <div class="testimonial-item-content">
                                            <p>“Finding a groomer who understands cats is not easy. The CloudyTailz groomer was incredibly gentle with Snowy and never rushed the process. Watching her remain calm and comfortable throughout the session gave me complete peace of mind.”</p>
                                        </div>
                                        <div class="testimonials-author-content">
                                            <h3>Priya Suri</h3>
                                            <p>Pet: Snowy (Persian Cat)</p>
                                            <p>Society: Lodha Park, Mumbai</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->


                            <!--New Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-item-header">
                                        <div class="testimonial-item-quote">
                                            <img src="{{ asset_url('assets/images/icon/testimonial-quote.svg')}}" alt="">
                                        </div>
                                        <div class="testimonial-item-rating">
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="testimonial-item-body">
                                        <div class="testimonial-item-content">
                                            <p>“As pet parents, we notice when someone truly loves animals. The CloudyTailz groomer was warm, patient, and incredibly caring with Coco from the moment he arrived. The entire process was hygienic, professional, and filled with genuine affection for pets.”</p>
                                        </div>
                                        <div class="testimonials-author-content">
                                            <h3>Naina Desai</h3>
                                            <p>Pet: Coco (Toy Poodle)</p>
                                            <p>Society: Raheja Imperia, Mumbai</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                            <!--New Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-item-header">
                                        <div class="testimonial-item-quote">
                                            <img src="{{ asset_url('assets/images/icon/testimonial-quote.svg')}}" alt="">
                                        </div>
                                        <div class="testimonial-item-rating">
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="testimonial-item-body">
                                        <div class="testimonial-item-content">
                                            <p>“Buddy is usually restless during grooming sessions, but the CloudyTailz groomer handled him so calmly that he settled down within minutes. The care, cleanliness, and patience shown throughout the appointment were exceptional. It felt less like a service and more like someone caring for their own pet.”</p>
                                        </div>
                                        <div class="testimonials-author-content">
                                            <h3>Rohan Malhotra</h3>
                                            <p>Pet: Buddy (Beagle)</p>
                                            <p>Society: The Magnolias, Gurugram</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                            <!--New Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-item-header">
                                        <div class="testimonial-item-quote">
                                            <img src="{{ asset_url('assets/images/icon/testimonial-quote.svg')}}" alt="">
                                        </div>
                                        <div class="testimonial-item-rating">
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="testimonial-item-body">
                                        <div class="testimonial-item-content">
                                            <p>“We've tried multiple grooming services before, but none matched the professionalism of CloudyTailz. The groomer treated Simba like family and paid attention to every detail. It's wonderful to have such a reliable service right at our doorstep.”</p>
                                        </div>
                                        <div class="testimonials-author-content">
                                            <h3>Neha Verma</h3>
                                            <p>Society: Jaypee Wish Town, Noida</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                            <!--New Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-item-header">
                                        <div class="testimonial-item-quote">
                                            <img src="{{ asset_url('assets/images/icon/testimonial-quote.svg')}}" alt="">
                                        </div>
                                        <div class="testimonial-item-rating">
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="testimonial-item-body">
                                        <div class="testimonial-item-content">
                                            <p>“My Shih Tzu, Coco, usually takes time to trust new people, but the groomer won her over within minutes. The convenience of doorstep grooming combined with the care shown towards my pet was outstanding. Coco looked absolutely adorable after her grooming session.”</p>
                                        </div>
                                        <div class="testimonials-author-content">
                                            <h3>Rahul Gupta</h3>
                                            <p>Society: Cleo County, Sector 121, Noida</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                            <!--New Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-item-header">
                                        <div class="testimonial-item-quote">
                                            <img src="{{ asset_url('assets/images/icon/testimonial-quote.svg')}}" alt="">
                                        </div>
                                        <div class="testimonial-item-rating">
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="testimonial-item-body">
                                        <div class="testimonial-item-content">
                                            <p>"My husband and I have always preferred premium services for our pets, but very few actually live up to expectations. CloudyTailz exceeded ours. Our Golden Retriever, Leo, was treated with remarkable patience and affection. The entire experience felt personalized, hygienic, and thoughtfully executed. We have already recommended them to several families in our community."</p>
                                        </div>
                                        <div class="testimonials-author-content">
                                            <p>Resident:  ATS Knightsbridge, Noida</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                               <!--New Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-item-header">
                                        <div class="testimonial-item-quote">
                                            <img src="{{ asset_url('assets/images/icon/testimonial-quote.svg')}}" alt="">
                                        </div>
                                        <div class="testimonial-item-rating">
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="testimonial-item-body">
                                        <div class="testimonial-item-content">
                                            <p>"Managing a busy professional schedule leaves little time for frequent salon visits. CloudyTailz solved that problem beautifully. Our Shih Tzu, Coco, received exceptional care right at home. The groomer was courteous, well-trained, and genuinely affectionate towards pets. It's rare to find a service that combines convenience with such high standards."</p>
                                        </div>
                                        <div class="testimonials-author-content">
                                            <p>Resident:  Powai, Mumbai</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                                   <!--New Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-item-header">
                                        <div class="testimonial-item-quote">
                                            <img src="{{ asset_url('assets/images/icon/testimonial-quote.svg')}}" alt="">
                                        </div>
                                        <div class="testimonial-item-rating">
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="testimonial-item-body">
                                        <div class="testimonial-item-content">
                                            <p>"Bouncer has a funny habit of getting excited whenever someone gives him attention. The moment the groomer arrived at our home in Hiranandani Gardens, Powai, he brought over his favorite toy as if he was welcoming an old friend.The grooming was excellent, and Bouncer looked amazing afterward. Most importantly, he was calm, happy, and comfortable throughout the session."</p>
                                        </div>
                                        <div class="testimonials-author-content">
                                            <p>Nikhil Khanna</p>
                                            <p>Resident:  Santa cruz West, Mumbai</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->




                            

                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-item-header">
                                        <div class="testimonial-item-quote">
                                            <img src="{{ asset_url('assets/images/icon/testimonial-quote.svg')}}" alt="">
                                        </div>
                                        <div class="testimonial-item-rating">
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                            <i class="fa fa-solid fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="testimonial-item-body">
                                        <div class="testimonial-item-content">
                                            <p>“We had an emergency late at night, and the team responded quickly. Their
                                                timely care saved our puppy. Truly thankful for their support and
                                                professionalism.”</p>
                                        </div>
                                        <div class="testimonials-author-content">
                                            <h3>Amit Gupta</h3>
                                            <p>Pet Owner</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->
                        </div>
                    </div>
                </div>
                <!-- Testimonial Slider End -->
            </div>
        </div>

        <div class="col-lg-12">
            <!-- Section Footer Text Start -->
            <div class="section-footer-text section-footer-contact wow fadeInUp" data-wow-delay="0.4s">
                <p style="color: var(--white-color);"><span><img src="{{ asset_url('assets/images/icon/icon-phone-white.svg')}}" alt=""></span> Your trusted partner in
                    keeping your dogs and cats happy, healthy, and safe every day.</p>
            </div>
            <!-- Section Footer Text End -->
        </div>
    </div>
</div>
<!-- Our Testimonial Section End -->

<!-- Our Blog Section Start -->
<div class="our-blog">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-xl-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Latest Blogs</h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">
                        Caring better for your dogs and cats every day
                    </h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-xl-6">
                <!-- Section Content Button Start -->
                <div class="section-content-btn">
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                        <p>Stay updated with expert-backed insights on dog and cat care, including health management,
                            diet planning, grooming, and preventive care.</p>
                    </div>

                    <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="{{ route('blog') }}" class="btn-default">View All Blogs</a>
                    </div>
                </div>
                <!-- Section Content Button End -->
            </div>
        </div>

        <div class="row">
            @forelse($latestBlogs as $blog)
                @php
                    $readingTime = max(1, (int) ceil(str_word_count(strip_tags($blog->content)) / 200));
                @endphp
                <div class="col-xl-4 col-md-6 mb-4">
                    <article class="blog-card wow fadeInUp h-100" data-wow-delay="{{ ($loop->index % 3) * 0.2 }}s">
                        {{-- Featured Image with Badges --}}
                        <div class="blog-card-thumb-wrap">
                            <a href="{{ route('blog.detail', $blog->slug) }}" class="blog-card-thumb-link" data-cursor-text="Read">
                                <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" class="blog-card-thumb" loading="lazy">
                            </a>

                            @if($blog->category)
                                <a href="{{ route('blog', ['category' => $blog->category->slug]) }}" class="blog-card-badge">
                                    🏷️ {{ $blog->category->name }}
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
                            Check back soon for new expert articles and pet care tips!
                        </p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>
<!-- Our Blog Section End -->


@endsection

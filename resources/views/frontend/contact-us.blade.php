@extends('frontend.layout.app')

@section('title', 'Book Pet Grooming & Care Services | Cloudytailz')
@section('meta_description', 'Ready to pamper your pet? Contact Cloudytailz to book professional dog and cat grooming, wellness support, and convenient pet care services today!')
@section('meta_keywords', 'Cloudytailz, pet care, dog care, cat care, pet grooming, pet food, vet services, pet services India, dog grooming, cat grooming, pet clinic, pet health care')
@section('meta_robots', 'index, follow')
@section('canonical', 'https://cloudytailz.com/contact-us')
@section('seo_tags')
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CloudyTailz">
    <meta property="og:title" content="Book Pet Grooming & Care Services | Cloudytailz">
    <meta property="og:description" content="Ready to pamper your pet? Contact Cloudytailz to book professional dog and cat grooming, wellness support, and convenient pet care services today!">
    <meta property="og:url" content="https://cloudytailz.com/contact-us">
@endsection
@section('content')


    <!-- Page Header Section Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Contact Us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->


    <div class="page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Contact Info List Start -->
                    <div class="contact-info-list">
                        <!-- Contact Info Item Start  -->
                        <div class="contact-info-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="{{ asset_url('assets/images/icon/icon-phone-white.svg')}}" alt="">
                            </div>
                            <div class="contact-info-item-content">
                                <h3>Contact Us</h3>
                                {{-- <p><a href="tel:8743988619">+91 8743988619</a></p> --}}
                                <p><a href="tel:9429694375">+91 9429694375</a></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End  -->

                        <!-- Contact Info Item Start  -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset_url('assets/images/icon/icon-mail-white.svg')}}" alt="">
                            </div>
                            <div class="contact-info-item-content">
                                <h3>Email Address</h3>
                                <p><a href="mailto:info@cloudytailz.com">info@cloudytailz.com</a></p>
                                <p><a href="mailto:info@cloudytailz.com">info@cloudytailz.com</a></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End  -->

                        <!-- Contact Info Item Start  -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{ asset_url('assets/images/icon/icon-location-white.svg')}}" alt="">
                            </div>
                            <div class="contact-info-item-content">
                                <h3>Our Locations</h3>
                                <p>55, Gali No. 3, Block G, Rajiv Gandhi Nagar, New Mustafabad, Gokulpuri, Delhi, 110094</p>
                            </div>
                        </div>
                        <!-- Contact Info Item End  -->

                        <!-- Contact Info Item Start  -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="{{ asset_url('assets/images/icon/icon-clock-white.svg')}}" alt="">
                            </div>
                            <div class="contact-info-item-content">
                                <h3>Working Hours</h3>
                                <p>Mon-Sat: 8:00 AM - 8:00 PM</p>
                                <p>Sunday: Closed</p>
                            </div>
                        </div>
                        <!-- Contact Info Item End  -->
                    </div>
                    <!-- Contact Info List End -->
                </div>

                <div class="col-lg-12">
                    <!-- Contact Form Box Start -->
                    <div class="contact-form-box">
                        <!-- Contact Us Form Start -->
                        <div class="contact-us-form">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">Contact Us</h3>
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Get in touch for quality veterinary pet
                                    care</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- Contact Form Start -->
                            <div class="contact-form">
                                <form id="contactForm" class="wow fadeInUp" data-wow-delay="0.2s">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6 mb-4">
                                            <input type="text" name="fname" class="form-control" id="fname"
                                                placeholder="First name" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-6 mb-4">
                                            <input type="text" name="lname" class="form-control" id="lname"
                                                placeholder="Last name" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-6 mb-4">
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="E-mail" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-6 mb-4">
                                            <input type="text" name="phone" class="form-control" id="phone"
                                                placeholder="Phone" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-12 mb-5">
                                            <textarea name="message" class="form-control" id="message" rows="4" placeholder="message..."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <!--<div class="col-12 mb-3 d-none" id="contactMsg"></div>-->
                                        <div class="col-md-12">
                                            <button type="submit" class="btn-default" id="">
                                                submit message
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Contact Form End -->
                        </div>
                        <!-- Contact Us Form End -->

                        <!-- Google Map Start -->
                        <div class="google-map-iframe">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.1040667868465!2d77.2673081!3d28.716435799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd470bde8a67%3A0xbde24510785f39d9!2sCloudytailz%20Pet%20Care!5e0!3m2!1sen!2sin!4v1792130363401!5m2!1sen!2sin"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="strict-origin-when-cross-origin"></iframe>
                        </div>
                        <!-- Google Map End -->
                    </div>
                    <!-- Contact Form Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->



@endsection

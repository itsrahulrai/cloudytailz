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


    <style>
        .service-entry h1 {
            margin-bottom: 15px;
        }

        .service-entry h4 {
            margin-top: 25px;
            margin-bottom: 10px;
        }

        .service-entry p {
            margin-bottom: 15px;
            line-height: 1.7;
        }

        .service-entry ul {
            margin-bottom: 15px;
            padding-left: 20px;
        }

        .service-entry li {
            margin-bottom: 8px;
        }
    </style>

    <!-- Page Header Section Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3">Privacy Policy</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active">Privacy Policy</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Page Content Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-single-content">
                        <div class="service-entry">

                            <h1>Privacy Policy</h1>
                            <p><strong>Last Updated:</strong> 21-02-2026</p>

                            <p>
                                At <strong>Cloudytailz</strong>, we value your privacy and are committed to protecting your
                                personal information. This Privacy Policy explains how we collect, use, and safeguard your
                                data when you use our website and services.
                            </p>

                            <h4>1. Information We Collect</h4>
                            <ul>
                                <li>Personal details such as name, phone number, and email address</li>
                                <li>Pet-related information (breed, age, health condition)</li>
                                <li>Booking and service details</li>
                                <li>Website usage data (cookies, IP address, browser type)</li>
                            </ul>

                            <h4>2. How We Use Your Information</h4>
                            <ul>
                                <li>To provide and manage our pet care services</li>
                                <li>To communicate regarding bookings, updates, or support</li>
                                <li>To improve our website and services</li>
                                <li>To send promotional offers (only with your consent)</li>
                            </ul>

                            <h4>3. Data Protection</h4>
                            <p>
                                We implement appropriate security measures to protect your personal information from
                                unauthorized access, misuse, or disclosure. However, no online system is completely secure,
                                and we cannot guarantee absolute security.
                            </p>

                            <h4>4. Sharing of Information</h4>
                            <p>
                                We do not sell or rent your personal information. Your data may only be shared with:
                            </p>
                            <ul>
                                <li>Service providers involved in delivering our services</li>
                                <li>Legal authorities if required by law</li>
                            </ul>

                            <h4>5. Cookies Policy</h4>
                            <p>
                                Our website may use cookies to enhance user experience and analyze website traffic. You can
                                choose to disable cookies through your browser settings.
                            </p>

                            <h4>6. Your Rights</h4>
                            <ul>
                                <li>You can request access to your personal data</li>
                                <li>You can request correction or deletion of your data</li>
                                <li>You can opt-out of marketing communications at any time</li>
                            </ul>

                            <h4>7. Third-Party Links</h4>
                            <p>
                                Our website may contain links to third-party websites. We are not responsible for the
                                privacy practices or content of those websites.
                            </p>

                            <h4>8. Changes to This Policy</h4>
                            <p>
                                Cloudytailz reserves the right to update this Privacy Policy at any time. Changes will be
                                posted on this page with an updated date.
                            </p>

                            <h4>9. Contact Us</h4>
                            <p>
                                If you have any questions regarding this Privacy Policy, please contact us:
                            </p>
                            <p>
                                <strong>Cloudytailz</strong><br>
                                Email: info@cloudytailz.com<br>
                                Phone: +91 8743988619
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content End -->

@endsection

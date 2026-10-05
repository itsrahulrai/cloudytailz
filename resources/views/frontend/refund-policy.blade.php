@extends('frontend.layout.app')

@section('title', 'Refund Policy - Cloudytailz – Complete Dog & Cat Pet Care Services')
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
                        <h1 class="text-anime-style-3">Refund Policy</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active">Refund Policy</li>
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

                            <h1>Refund Policy</h1>
                            <p><strong>Last Updated:</strong> 21-02-2026</p>

                            <p>
                                At <strong>Cloudytailz</strong>, we strive to provide high-quality pet care, grooming, and
                                wellness services for your furry companions. Your satisfaction is important to us, and this
                                Refund Policy outlines the terms under which refunds may be granted.
                            </p>

                            <h4>1. General Policy</h4>
                            <p>
                                All payments made for services are generally non-refundable once the service has been
                                successfully delivered. By booking our services, you agree to this policy.
                            </p>

                            <h4>2. Cancellation Policy</h4>
                            <ul>
                                <li>Cancellations made at least 24 hours before the appointment may be eligible for
                                    rescheduling or partial refund.</li>
                                <li>Cancellations made less than 24 hours before the appointment are non-refundable.</li>
                                <li>No-shows will not be eligible for any refund.</li>
                            </ul>

                            <h4>3. Service Dissatisfaction</h4>
                            <p>
                                If you are not satisfied with the service provided, please contact us within 24 hours. We
                                may offer a re-service or partial refund based on the situation, at our sole discretion.
                            </p>

                            <h4>4. Refund Processing</h4>
                            <p>
                                Approved refunds will be processed within 5-7 business days through the original payment
                                method. Processing time may vary depending on your bank or payment provider.
                            </p>

                            <h4>5. Non-Refundable Cases</h4>
                            <ul>
                                <li>Completed grooming or care services</li>
                                <li>Pet behavior issues affecting service outcome</li>
                                <li>Incorrect or incomplete information provided by the pet owner</li>
                            </ul>

                            <h4>6. Emergency Situations</h4>
                            <p>
                                In case a service cannot be completed due to unforeseen emergencies, Cloudytailz may offer a
                                reschedule or partial refund depending on the circumstances.
                            </p>

                            <h4>7. Contact Us</h4>
                            <p>
                                For any refund-related queries, please contact us:
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

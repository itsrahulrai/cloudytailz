<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!-- Page Title -->
    <title>@yield('title', 'Cloudytailz – Complete Dog & Cat Pet Care Services')</title>

    <!-- Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'Cloudytailz offers premium pet care services for dogs and cats including grooming, healthy food, vet support, and personalized care to keep your furry friends happy and healthy.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Cloudytailz, pet care, dog care, cat care, pet grooming, pet food, vet services, pet services India')">
    <meta name="author" content="Cloudytailz">
    <meta name="robots" content="@yield('meta_robots', 'index, follow')">
    <!-- Canonical URL -->
    <link rel="canonical" href="@yield('canonical', url()->current())">
    @yield('seo_tags')
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset_url('assets/images/logo-png.png') }}">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap"
        rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset_url('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{ asset_url('assets/css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset_url('assets/css/swiper-bundle.min.css') }}">
    <!-- Font Awesome Icon Css-->
    <link href="{{ asset_url('assets/css/all.min.css') }}" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ asset_url('assets/css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset_url('assets/css/magnific-popup.css') }}">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{ asset_url('assets/css/mousecursor.css') }}">
    <!-- Main Custom Css -->
    <link href="{{ asset_url('assets/css/custom.css') }}" rel="stylesheet" media="screen">
    @stack('styles')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.SITE_ROUTES = {
            petVisit: "{{ route('submit.petvisit') }}",
            package: "{{ route('submit.package') }}",
            contact: "{{ route('submit.contact') }}",
            thankYou: "{{ route('thank.you') }}"
        };
    </script>
    
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NSRBFX62');</script>
<!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSRBFX62"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-18108460882"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'AW-18108460882');
    </script>

    <!-- Appointment Popup Modal Start -->
    <div class="modal fade" id="appointmentModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Book Your Package</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="appointment-from">
                        <form id="packageBookingForm">
                            @csrf
                            <div class="row">

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control" placeholder="Full Name"
                                        required>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number"
                                        required>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input type="text" name="package" id="packageInput" class="form-control"
                                        placeholder="Selected Package" readonly>
                                </div>

                               

                                <div class="col-lg-12">
                                    <div class="appointment-from-btn">
                                        <button type="submit" class="btn-default" id="packageSubmitBtn">
                                            <span>Book Now</span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Appointment Popup Modal End -->

    <!-- Appointment Popup Modal Start -->
    <div class="modal fade" id="appointmentModal2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Schedule Your Pet Visit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="appointment-from">
                        <form id="petVisitForm">
                            @csrf
                            <div class="row">

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control" placeholder="Full Name"
                                        required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Email Address" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control"
                                        placeholder="Phone Number" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <select name="services" class="form-control form-select" required>
                                        <option value="" disabled selected>Select a Service</option>
                                        <option value="Pet_Health_Checkups">Pet Health Checkups</option>
                                        <option value="Grooming_Hygiene">Grooming &amp; Hygiene</option>
                                        <option value="Diagnostics_Lab_Testing">Diagnostics &amp; Lab Testing</option>
                                        <option value="General_Health_Checkups">General Health Checkups</option>
                                        <option value="Nutritional_Guidance">Nutritional Guidance</option>
                                        <option value="Puppy_Kitten_Care">Puppy &amp; Kitten Care</option>
                                        <option value="New_Paws_Health_Care">New Paws Health Care</option>
                                        <option value="PetGuard_Health_Check">PetGuard Health Check</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>
                                </div>

                                
                                <div class="col-lg-12">
                                    <div class="appointment-from-btn">
                                        <button type="submit" class="btn-default" id="visitSubmitBtn">
                                            <span>Send Message</span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Appointment Popup Modal End -->


    <!-- Preloader Start -->
    <!--<div class="preloader">-->
    <!--    <div class="loading-container">-->
    <!--        <div class="loading"></div>-->
    <!--        <div id="loading-icon"><img src="{{ asset_url('assets/images/logo-png.png') }}" alt=""></div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- Preloader End -->

    <!-- Header Start -->

    @include('frontend.include.header')

    <!-- Header End -->

    @yield('content')

    <!-- Footer Start -->
    @include('frontend.include.footer')
    <!-- Footer End -->


    <!-- Left Side Call Button -->
    <a href="tel:+919429694375" class="floating-call">
        <i class="fa-solid fa-phone"></i>
    </a>
    
    <!-- Right Side WhatsApp Button -->
    <a href="https://wa.me/919429694375" target="_blank" class="floating-whatsapp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <script>
        function toggleList(extraId, btnId) {
            var el = document.getElementById(extraId);
            var btn = document.getElementById(btnId);
            var isOpen = el.style.maxHeight !== '0px' && el.style.maxHeight !== '0';
            if (isOpen) {
                el.style.maxHeight = '0';
                btn.textContent = '+ Read More';
            } else {
                el.style.maxHeight = el.scrollHeight + 'px';
                btn.textContent = '- Read Less';
            }
        }
    </script>

    <script>
        document.querySelectorAll('.open-booking').forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();

                let packageName = this.getAttribute('data-package');

                // Set package name
                document.getElementById('packageInput').value = packageName;

                // Open modal
                let modal = new bootstrap.Modal(document.getElementById('appointmentModal'));
                modal.show();
            });
        });
    </script>
    

    <script src="{{ asset_url('assets/js/frontend-forms.js') }}"></script>
    <!-- Jquery Library File -->
    <script src="{{ asset_url('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset_url('assets/js/bootstrap.min.js') }}"></script>
    <!-- Validator js file -->
    <script src="{{ asset_url('assets/js/validator.min.js') }}"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset_url('assets/js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset_url('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ asset_url('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset_url('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Magnific js file -->
    <script src="{{ asset_url('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset_url('assets/js/SmoothScroll.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ asset_url('assets/js/parallaxie.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset_url('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset_url('assets/js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset_url('assets/js/SplitText.min.js') }}"></script>
    <script src="{{ asset_url('assets/js/ScrollTrigger.min.js') }}"></script>
    <!-- YTPlayer js File -->
    <script src="{{ asset_url('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset_url('assets/js/wow.min.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset_url('assets/js/function.js') }}"></script>
    @stack('scripts')
</body>

</html>

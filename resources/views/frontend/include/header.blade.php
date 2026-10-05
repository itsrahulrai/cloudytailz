<header class="main-header">
    <div class="header-sticky bg-section">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="./">
                    <img src="{{ asset_url('assets/images/logo-cloudy.jpeg')}}" width="100px" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="./">Home</a> </li>
                            <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About us</a>
                            <li class="nav-item submenu"><a class="nav-link" href="javascript:void(0)">Services</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="{{route('dog-grooming')}}">Dog Grooming</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('cat-grooming')}}">Cat Grooming</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('vet-video-call')}}">Vet Video Call</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('vet-home-visit')}}">Vet Home Visit</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('pet-nutritionist')}}">Pet Nutritionist</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{route('gallery')}}">Our Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('blog')}}">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
                            <li class="nav-item highlighted-menu"><a class="nav-link" href="{{route('contact')}}">Book Appointment</a></li>
                        </ul>
                    </div>

                    <!-- Header Btn Start -->
                    <div class="header-btn">
                        <a href="" class="btn-default btn-highlighted" data-bs-toggle="modal" data-bs-target="#appointmentModal2">Book Appointment</a>
                    </div>
                    <!-- Header Btn End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>

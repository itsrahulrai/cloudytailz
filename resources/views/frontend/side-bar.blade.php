<div class="page-single-sidebar">
    <!-- Page Category List Start -->
    <div class="page-category-list wow fadeInUp">
        <h3>Explore Our Services</h3>
        <ul>
            <li><a href="{{route('dog-grooming')}}">Dog Grooming</a></li>
            <li><a href="{{route('cat-grooming')}}">Cat Grooming</a></li>
            <li><a href="{{route('vet-home-visit')}}">Vet Video Call</a></li>
            <li><a href="{{route('vet-home-visit')}}">Vet Home Visit</a></li>
            <li><a href="{{route('pet-nutritionist')}}">Pet Nutritionist</a></li>
        </ul>
    </div>
    <!-- Page Category List End -->

    <!-- Sidebar CTA Box Start -->
    <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s">
        <!-- Sidebar CTA Image Start -->
        <div class="sidebar-cta-image">
            <figure>
                <img src="{{ asset_url('assets/images/bg/sidebar-cta-image.jpg')}}" alt="">
            </figure>
        </div>
        <!-- Sidebar CTA Image End -->

        <!-- Sidebar CTA Body Start -->
        <div class="sidebar-cta-body">
            <div class="icon-box">
                <img src="images/logo-png.png" alt="">
            </div>

            <!-- Sidebar CTA Content Start -->
            <div class="sidebar-cta-content">
                <h3>Connect With Us For Expert Veterinary Care</h3>
            </div>
            <!-- Sidebar CTA Content End -->

            <!-- Sidebar CTA Button Start -->
            <div class="sidebar-cta-btn">
                <a href="{{route('contact')}}" class="btn-default">Contact Us</a>
            </div>
            <!-- Sidebar CTA Button End -->
        </div>
        <!-- Sidebar CTA Body End -->
    </div>
    <!-- Sidebar CTA Box End -->
</div>

<div id="sticky-header" class="carvally_nav_manu align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="logo">
                    <a class="logo_img" href="{{ route('website') }}" title="carvally">
                        <img src="assets/images/resource/logo.png" alt="">
                    </a>
                    <a class="main_sticky" href="{{ route('website') }}" title="carvally">
                        <img src="assets/images/resource/logo1.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 pr-0">
                <nav class="carvally_menu">
                    <ul class="nav_scroll">
                        {{-- <li><a href="{{ route('website') }}">Home</a></li> --}}
                        {{-- <li><a href="{{ route('aboutus') }}">About Us</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li>
                            <a href="#">Language <span><i class="fas fa-angle-down"></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="#"> English </a></li>
                                <li><a href="#"> French </a></li>
                            </ul>
                        </li> --}}
                    </ul>

                </nav>
            </div>
            <div class="col-lg-2 pr-0">
                <div class="header-right-button-box">
                    <div class="slider-button-title">
                        <h6>Appelez-nous!</h6>
                        <p>(514) 279 2031</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- carvally Mobile Menu Area -->
<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
    <div class="mobile-menu">
        <nav class="carvally_menu">
            <ul class="nav_scroll">
                <li><a href="{{ route('website') }}">Home</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>

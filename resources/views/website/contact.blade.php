@extends('website.layout.layout')



@section('title','Contact')

@section('content')
    <!--==================================================-->
    <!-- Start carvally Header Top Menu Area -->
    <!--==================================================-->
    {{-- @include('website.include.header-menu') --}}
    <!--==================================================-->
    <!-- End carvally Header Top Menu Area -->
    <!--===================================================-->
    <!--==================================================-->
    <!-----Start breadcumb Section ----->
    <!--===================================================-->
    <div class="breatcam-area upper d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcam-content">
                        <!-- breadcumb title -->
                        <div class="breatcam-title">
                            <h1> Contact Us </h1>
                        </div>
                    </div>
                    <!-- breatcam menu -->
                    <div class="breatcam-menu">
                        <ul>
                            <li> <i class="fa fa-home"></i><a href="index.html">Home</a></li>
                            <li> Contact Us </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End carvally breadcumb Section -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start carvally Contact Section -->
    <!--==================================================-->
    <div class="contacts-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="conatact-single-box">
                        <div class="contacts-icon">
                            <img src="assets/images/resource/contact1.jpg" alt="">
                        </div>
                        <!-- contact title -->
                        <div class="contact-title">
                            <h5> Office Address </h5>
                        </div>
                        <!-- contact desc -->
                        <div class="contact-description">
                            <p> Montreal , Quebec </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="conatact-single-box">
                        <div class="contacts-icon">
                            <img src="assets/images/resource/contact2.jpg" alt="">
                        </div>
                        <!-- contact title -->
                        <div class="contact-title">
                            <h5> Phone Call </h5>
                        </div>
                        <!-- contact desc -->
                        <div class="contact-description">
                            <p>(514) 279 2031</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="conatact-single-box">
                        <div class="contacts-icon">
                            <img src="assets/images/resource/contact3.jpg" alt="">
                        </div>
                        <!-- contact title -->
                        <div class="contact-title">
                            <h5> E-Mail Us </h5>
                        </div>
                        <!-- contact desc -->
                        <div class="contact-description">
                            <p>M.valet@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="conatact-single-box">
                        <div class="contacts-icon">
                            <img src="assets/images/resource/contact4.jpg" alt="">
                        </div>
                        <!-- contact title -->
                        <div class="contact-title">
                            <h5> Supports </h5>
                        </div>
                        <!-- contact desc -->
                        <div class="contact-description">
                            <p>24/7 ready for supports.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End carvally Contact Section -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start carvally Contact Section -->
    <!--==================================================-->
    <div class="contacts-us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form-box">
                        <!-- sidebar title -->
                        <div class="sidebar-title2 text-center">
                            <h4>CONTACT US</h4>
                            <h1>Contact Information</h1>
                        </div>
                        <form action="{{ route('message') }}" method="POST" id="dreamit-form">
                            @csrf
                            <div class="col-lg-12">
                                <div class="form_box mb-20">
                                    <input type="text" name="name" placeholder="Votre Nom:">
                                    <i class="bi bi-person"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_box mb-20">
                                    <input type="email" name="email" placeholder="Email:">
                                    <i class="bi bi-envelope"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_box mb-20">
                                    <input type="number" name="phone" placeholder="Votre Numéro:">
                                    <i class="bi bi-phone"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_box mb-15">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre Message"></textarea>
                                </div>
                            </div>
                            <div class="quote_form">
                                <button type="submit"> <i class="bi bi-envelope"></i> Envoyer </button>
                            </div>
                        </form>
                        <div id="status"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End carvally Contact Section -->
    <!--==================================================-->

    <!--=================================================-->
    <!----Start carvally Map Section  ----->
    <!--=================================================-->
    <div class="map-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48384.367867189205!2d-74.01058227968896!3d40.71751035716885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1609671967457!5m2!1sen!2sbd"
                        width="1920" height="550" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- Ened carvally Map Section -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start scrollup section Area -->
    <!--==================================================-->
    <!-- scrollup section -->
    <div class="scroll-area">
        <div class="top-wrap">
            <div class="go-top-btn-wraper">
                <div class="go-top go-top-button">
                    <i class="fas fa-arrow-up"></i>
                    <i class="fas fa-arrow-up"></i>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- Start scrollup section Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start Search Popup Area -->
    <!--==================================================-->
    <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-multiply"><i
                    class="far fa-times-circle"></i></span></button>
        <button class="close-search"><i class="fas fa-arrow-up"></i></button>
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!--==================================================-->
    <!-- Start Search Popup Area -->
    <!--==================================================-->

@endsection

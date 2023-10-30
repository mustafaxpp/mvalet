@extends('website.layout.layout')



@section('title','Home')

@section('content')
    <!--==================================================-->
    <!-- Start carvally slider Area -->
    <!--==================================================-->
    <div class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- hero content -->
                    <div class="hero-content text-center">
                        {{-- <div class="hero-icon-thumb">
                            <img src="assets/images/slider/hero-shape1.png" alt="">
                        </div> --}}
                        <!-- hero title -->
                        <div class="hero-title">
                            <h1> Rendez votre événement PARFAIT ! </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!--End carvally slider Area  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start carvally Feature Secton -->
    <!--==================================================-->
    {{-- <div class="feature-section">
        <div class="container">
            <div class="row feature-bg">
                <div class="col-lg-3 col-md-6">
                    <div class="carvally-single-feature-box">
                        <div class="feature-icon-thumb">
                        </div>
                        <div class="featuer-content">
                            <div class="feature-title">
                                <h4> Capacités du système </h4>
                            </div>
                            <div class="feature-text">
                                <p> Efficacité, Intégration, Sécurité, Précision, Commodité . </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="carvally-single-feature-box">
                        <div class="feature-icon-thumb">
                        </div>
                        <div class="featuer-content">
                            <div class="feature-title">
                                <h4> Méthodes de fonctionnement </h4>
                            </div>
                            <div class="feature-text">
                                <p> Adaptabilité, Efficacité, Collaboration, Précision, Innovation </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="carvally-single-feature-box">
                        <div class="feature-icon-thumb">
                        </div>
                        <div class="feature-content">
                            <div class="feature-title">
                                <h4> Hautement sécurisé </h4>
                            </div>
                            <div class="feature-text">
                                <p>  Fortifié, Chiffré, Vigilant, Impénétrable, Protégé  </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="carvally-single-feature-box">
                        <div class="feature-icon-thumb">
                        </div>
                        <div class="feature-content">
                            <div class="feature-title">
                                <h4> Contrôle de la circulation </h4>
                            </div>
                            <div class="feature-text">
                                <p> Régulation, Gestion, Flux, Coordination, Efficacité </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--==================================================-->
    <!-- End carvally Feature Secton -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start carvally about Section -->
    <!--==================================================-->
    <div class="about-section mt-4 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="carvally-bold-title">
                        <h1> À PROPOS </h1>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="about-thumb">
                        <img src="{{ asset('assets/images/sections/valet-team.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pr-0 pl-4">
                    <div class="carvally-section-title">
                        <h4> Bonne équipe </h4>
                        <h1> Valet professionnel et</h1>
                        <h1 class="section-text"> Stationnement de votre voiture </h1>
                        <p> "En dévoilant le luxe, la commodité et la confiance, nous redéfinissons les services de voiturier avec une finesse inégalée.
                            Confiez vos clés à notre équipe d'experts et laissez-nous orchestrer une élégance sans faille,
                            faire en sorte que chaque arrivée soit une expérience inoubliable. </p>
                    </div>
                    <!-- about right box -->
                    <div class="row responsive pt-4">
                        <div class="col-lg-6">
                            <div class="single-about-box">
                                <div class="about-list">
                                    <ul>
                                        <li>
                                            <p> Professional Team </p>
                                        </li>
                                        <li>
                                            <p> Customers Satisfaction Gaurenty </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-single-counter">
                                <div class="counter-number">
                                    <h2 class="counter">500</h2>
                                </div>
                                <div class="about-counter-title">
                                    <h2>Happy Customers</h2>
                                </div>
                                <div class="about-box-shape">
                                    <img src="assets/images/resource/about-shape1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="single-about-box">
                                <div class="about-list">
                                    <ul>
                                        <li>
                                            <p> Your Car In Safe Hands </p>
                                        </li>
                                        <li>
                                            <p> Pickup & drop Off</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="single-about-box">
                                <div class="about-icon-thumb">
                                    <img src="assets/images/resource/24.png" alt="">
                                </div>
                                <!-- about title -->
                                <div class="about-title">
                                    <h5> 24/7 Assistance </h5>
                                </div>
                                <!-- about desc -->
                                <div class="about-desc">
                                    <p> Appropriately productivateds strategic theme rest </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End carvally about Secton -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start carvally Service Section -->
    <!--==================================================-->
    <div class="service-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="carvally-section-title white text-center pb-60">
                        <h4> NOS SERVICES </h4>
                        <h1> Services de Valet de qualité </h1>
                    </div>
                </div>
            </div>
            <div class="row service-bg">
                <div class="service-list owl-carousel">
                    <div class="col-lg-12">
                        <div class="carvally-single-service-box">
                            <!-- blog content -->
                            <div class="carvally-service-content">
                                <!-- icon thumb -->
                                <div class="service-icon-thumb">
                                    <img src="assets/images/resource/steering.png" alt="">
                                </div>
                                <!-- service title -->
                                <div class="service-title">
                                    <h2> Haute qualité de conduite </h2>
                                </div>
                                <!-- service desc -->
                                <div class="service-desc">
                                    <p> Nous avons une équipe formidable et de la plus haute qualité pour conduire tous les types de voitures en toute sécurité .</p>
                                </div>
                                <!-- text menu -->
                                <div class="service-check-list">
                                    <ul>
                                        <li> <i class="bi bi-check-lg"></i> Conduire en toute sécurité </li>
                                        <li> <i class="bi bi-check-lg"></i> Conducteurs honnêtes </li>
                                        <li> <i class="bi bi-check-lg"></i> Livraison rapide </li>
                                        <li> <i class="bi bi-check-lg"></i> Équipe organisée </li>
                                    </ul>
                                </div>
                                <!-- service button -->
                                <div class="service-time-button">
                                    <span> <i class="bi bi-p-circle-fill"></i> Professionnel </span>
                                </div>
                            </div>
                            <!-- blog thumb -->
                            <div class="carvally-service-thumb2 w-100">
                                <img class="w-100" src="assets/images/resource/bb.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- service shape -->
                <div class="service-shape">
                    <div class="shape-thumb">
                        <img src="assets/images/resource/car-2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End carvally Service Secton -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start carvally Call Do Section -->
    <!--==================================================-->
    <div class="call-do-action">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 ">
                    <div class="call-do-title">
                        <h2> Envoyez-nous un message pour en savoir plus <span>Informations!</span> </h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 ">
                    <div class="right-button text-right">
                        <div class="carvally-button">
                            <a href="#contact">Envoyez Un Message Maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- call do shape -->
            <div class="call-do-shape">
                <div class="shape-thumb-3">
                    <img src="assets/images/resource/car-3.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End carvally Call Do Section -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start carvally Contact Section -->
    <!--==================================================-->
    <div class="contact-section">
        <div class="container">
            <div class="row contact-bg align-items-center">
                <div class="col-lg-7 col-md-12 pr-25">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="carvally-section-title pb-50">
                                <h4> NOS IMPLANTATIONS </h4>
                                <h1> Service de Valet et</h1>
                                <h1 class="section-text"> Parking </h1>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="single-contact-box">
                                <div class="contact-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div class="contact-content">
                                    <div class="contact-title">
                                        <h3> Notre emplacement </h3>
                                    </div>
                                    <div class="contact-desc">
                                        <p> Montreal , Canada </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 " id="contact">
                    <div class="row contact-form-bg">
                        <div class="contact-form-title">
                            <h2> Entrer en contact </h2>
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
                <div class="contact-shape">
                    <img src="assets/images/resource/car-4.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End carvally Contact Section -->
    <!--==================================================-->
@endsection

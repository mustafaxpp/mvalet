<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Carvally - Car Wish & Repiar HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />
    <!-- carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all" />
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="assets/css/animated-text.css" type="text/css" media="all" />
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="assets/css/all.min.css" type="text/css" media="all" />
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all" />
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="assets/css/theme-default.css" type="text/css" media="all" />
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <!-- transitions CSS -->
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css" media="all" />
    <!-- venobox CSS -->
    <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all" />
    <!-- responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all" />
    <!-- modernizr js -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

    <!--==================================================-->
    <!-- Start carvally Header Top Menu Area -->
    <!--==================================================-->
    @include('website.include.header-menu')
    <!--==================================================-->
    <!-- End carvally Header Top Menu Area -->
    <!--===================================================-->

    <!--==================================================-->
    <!-- Start carvally Main Menu Area -->
    <!--==================================================-->
    @include('website.include.menu')
    <!--==================================================-->
    <!-- End carvally Main Menu Area -->
    <!--==================================================-->

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
                            <h1> Appoinment </h1>
                        </div>
                    </div>
                    <!-- breatcam menu -->
                    <div class="breatcam-menu">
                        <ul>
                            <li> <i class="fa fa-home"></i><a href="index.html">Home</a></li>
                            <li> Appoinment </li>
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
    <!-- Start carvally appoinment Area -->
    <!--==================================================-->
    <div class="appoinment-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="appoinment-thumb">
                        <img src="assets/images/resource/appoinment.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="appoinment-form">
                        <!-- appoinment title -->
                        <div class="appoinment-title">
                            <h4>APPOINMENT</h4>
                            <h2>Mak an Appoinment</h2>
                        </div>
                        <!-- form -->
                        <form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
                            <div class="row appoinment-form-bg">
                                <div class="col-lg-6">
                                    <div class="form_box mb-20">
                                        <input type="text" name="name" placeholder="Your Name*">
                                        <i class="bi bi-person"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-20">
                                        <input type="text" name="name" placeholder="Enter-Email*">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_box mb-20">
                                        <select id="cars" name="carlist" form="carform">
                                            <option value="service">Service Type</option>
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="opel">Opel</option>
                                            <option value="audi">Audi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form_box mb-20">
                                        <input type="date" id="myDate" value="2023-10-18">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form_box mb-20">
                                        <input type="time" value="13:00" step="900">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_box upper mb-20">
                                        <textarea name="massage" id="massage" cols="30" rows="10"
                                            placeholder="Write Something..."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="quote_form">
                                        <button type="submit"> <i class="bi bi-envelope"></i> Get A Quote </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="status"></div>
                    </div>
                </div>
                <div class="appoinment-shape">
                    <div class="appoin-thumb">
                        <img src="assets/images/resource/appoinment-bg2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End carvally appoinment Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start carvally Subscribe Section -->
    <!--==================================================-->
    <div class="subscribe-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <!-- subscribe thumb -->
                    <div class="subscribe-thumb">
                        <img src="assets/images/resource/subscribe.png" alt="">
                    </div>
                    <!-- subscribe title -->
                    <div class="subscribe-title">
                        <h4> SUBSCRIBE OUR NEWSLETTER </h4>
                        <h1> Subscribe Now </h1>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- steering subscribe -->
                    <div class="subscribe-steering">
                        <img src="assets/images/resource/steering3.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 text-right">
                    <!-- form -->
                    <form id="contact_form" action="mail.php" method="POST">
                        <!-- subscribe form -->
                        <div class="subscribe-from">
                            <input type="text" placeholder="Enter E-Mail">
                            <!-- form button -->
                            <button> Subscribe </button>
                        </div>
                    </form>
                    <p id="status"></p>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- Start carvally Subscribe Section -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start carvally Footer Section -->
    <!--==================================================-->
    @include('website.include.footer')
    <!--==================================================-->
    <!-- End carvally Footer Section -->
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

    <!-- jquery js -->
    <script src="assets/js/vendor/jquery-3.2.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- counterup js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- waypoints js -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.js"></script>
    <!-- imagesloaded js -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- venobox js -->
    <script src="venobox/venobox.js"></script>
    <!-- ajax mail js -->
    <script src="assets/js/ajax-mail.js"></script>
    <!--  animated-text js -->
    <script src="assets/js/animated-text.js"></script>
    <!-- venobox min js -->
    <script src="venobox/venobox.min.js"></script>
    <!-- isotope js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- jquery meanmenu js -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!-- jquery scrollup js -->
    <script src="assets/js/jquery.scrollUp.js"></script>
    <!-- theme js -->
    <script src="assets/js/theme.js"></script>
</body>

</html>

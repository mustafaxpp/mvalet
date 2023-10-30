<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('assets/images/fav-icon/icon.png') }}">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all" />
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css" media="all" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" media="all" />
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animated-text.css') }}" type="text/css" media="all" />
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" type="text/css" media="all" />
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" type="text/css" media="all" />
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme-default.css') }}" type="text/css" media="all" />
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}" type="text/css" media="all" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css" media="all" />
    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}" type="text/css" media="all" />
    <!-- venobox CSS -->
    <link rel="stylesheet" href="{{ asset('venobox/venobox.css') }}" type="text/css" media="all" />
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css" media="all" />
    <!-- modernizr js -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

    <!--==================================================-->
    <!-- Start carvally Main Menu Area -->
    <!--==================================================-->
    @include('website.include.menu')
    <!--==================================================-->
    <!-- End carvally Main Menu Area -->
    <!--==================================================-->

    @yield('content')
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

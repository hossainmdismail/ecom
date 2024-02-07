<?php
use App\Models\Config;

$config = Config::first();
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>Evara - eCommerce HTML Template</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    @if ($config)
        <link rel="shortcut icon" href="{{ asset('files/config/'.$config->logo) }}" type="image/x-icon">
    @endif
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/imgs/theme/favicon.svg"> --}}
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/maind134.css?v=3.4">
    @livewireStyles
</head>

<body>
    {{-- headewr --}}
    @include('frontend.layouts.header')
    {{-- headewr --}}

    {{-- main --}}
    @yield('content')
    {{-- main --}}

    {{-- footer --}}
    @include('frontend.layouts.footer')
    {{-- footer --}}
    <!-- Preloader Start -->
    {{-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <h5 class="mb-10">Now Loading</h5>
                    <div class="loader">
                        <div class="bar bar1"></div>
                        <div class="bar bar2"></div>
                        <div class="bar bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Vendor JS-->
    <script src="{{ asset('frontend') }}/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/slick.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/jquery.syotimer.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/wow.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/jquery-ui.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/perfect-scrollbar.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/magnific-popup.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/select2.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/waypoints.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/counterup.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/jquery.countdown.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/images-loaded.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/isotope.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/scrollup.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/jquery.vticker-min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/jquery.theia.sticky.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="{{ asset('frontend') }}/js/maind134.js?v=3.4"></script>
    <script src="{{ asset('frontend') }}/js/shopd134.js?v=3.4"></script>
    @livewireScripts

</body>


<!-- Mirrored from wp.alithemes.com/html/evara/evara-frontend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2023 14:37:57 GMT -->
</html>

<?php
use App\Models\Config;

$config = Config::first();
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Familly Bazar">
    {!! SEO::generate() !!}
    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '3722181268063896');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=3722181268063896&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Meta Pixel Code -->
    <link rel="stylesheet" href="{{ asset('frontend/css/radio.css') }}">
    @if ($config)
    <link rel="shortcut icon" href="{{ asset('files/config/'.$config->logo) }}" type="image/x-icon">
    @endif
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/maind134.css?v=3.4">
    @yield('style')
    @livewireStyles
</head>

<body class="relative">
    {{-- Model --}}
    {{-- <div class="position-absolute top-0 start-0" style="width: 100%; height: 100vh; background: #0000001c; z-index: 10;display: flex;align-items: center;justify-content: center;">
        <div class="container bg-white p-4">
            dd
        </div>
    </div> --}}
    {{-- headewr --}}
    @include('frontend.layouts.header')
    {{-- headewr --}}

    {{-- main --}}
    @yield('content')
    {{-- main --}}

    {{-- footer --}}
    @include('frontend.layouts.footer')

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

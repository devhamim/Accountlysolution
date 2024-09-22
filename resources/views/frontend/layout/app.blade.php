<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="keywords" content="">
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if ($setting->first()->title != null)
        <title>{{ $setting->first()->title }}</title>
    @endif
    <!-- favicon icon -->
    @if ($setting->first()->favicon != null)
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
    @endif

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/bootstrap.min.css" />

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/animate.css" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/flaticon.css" />

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/font-awesome.css" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/themify-icons.css" />

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/slick.css">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/prettyPhoto.css">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/shortcode.css" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/main.css" />

    <!-- megamenu -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/megamenu.css" />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/responsive.css" />

</head>

<body>
    <!--page start-->
    <div class="page">
        <!--header start-->
        @include('frontend.layout.header')

        @yield('content')

        <!--footer start-->
        @include('frontend.layout.footer')
        <!-- footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->
    </div>

    <!-- Javascript -->
    <script src="{{ asset('frontend') }}/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery-migrate-3.3.2.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.easing.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery-waypoints.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery-validate.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.prettyPhoto.js"></script>
    <script src="{{ asset('frontend') }}/js/slick.min.js"></script>
    <script src="{{ asset('frontend') }}/js/numinate.min.js"></script>
    <script src="{{ asset('frontend') }}/js/imagesloaded.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery-isotope.js"></script>
    <script src="{{ asset('frontend') }}/js/main.js"></script>
</body>
</html>

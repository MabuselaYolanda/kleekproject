<!DOCTYPE html>
<html lang="zxx" class="overflow-x-hidden"> <!-- Use overflow-x-hidden class if you use same slider as client section slider -->

<head>
    <meta charset="utf-8">
    <meta name="description" content="{{ env('APP_NAME') }}">
    <meta name="author" content="{{ env('APP_NAME') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ env('APP_NAME') }} | Business Automation Platform</title>
    <link rel="stylesheet" href="{{ asset('welcome/assets/css/bootstrap.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('welcome/assets/css/animate.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('welcome/assets/css/owl.carousel.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('welcome/assets/css/owl.theme.default.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('welcome/assets/css/meanmenu.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('welcome/assets/css/magnific-popup.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('welcome/assets/css/boxicons.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('welcome/assets/css/line-awesome.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('welcome/assets/css/flaticon.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('welcome/assets/css/style.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('welcome/assets/css/responsive.css') }}" type="text/css" media="all" />

    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
</head>


<body class="overflow-x-hidden">
<div class="preloader orange-gradient">
    <div class="preloader-wrapper">
        <div class="preloader-grid">
            <div class="preloader-grid-item preloader-grid-item-1"></div>
            <div class="preloader-grid-item preloader-grid-item-2"></div>
            <div class="preloader-grid-item preloader-grid-item-3"></div>
            <div class="preloader-grid-item preloader-grid-item-4"></div>
            <div class="preloader-grid-item preloader-grid-item-5"></div>
            <div class="preloader-grid-item preloader-grid-item-6"></div>
            <div class="preloader-grid-item preloader-grid-item-7"></div>
            <div class="preloader-grid-item preloader-grid-item-8"></div>
            <div class="preloader-grid-item preloader-grid-item-9"></div>
        </div>
    </div>
</div>
@yield('content')

<script src="{{ asset('welcome/assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('welcome/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('welcome/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('welcome/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('welcome/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('welcome/assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('welcome/assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('welcome/assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('welcome/assets/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('welcome/assets/js/jquery.waypoints.js') }}"></script>
<script src="{{ asset('welcome/assets/js/counter-up.js') }}"></script>
<script src="{{ asset('welcome/assets/js/script.js') }}"></script>
</body>
</html>

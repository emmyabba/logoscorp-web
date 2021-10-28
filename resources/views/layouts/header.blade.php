<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="{{ $description ?? 'Logeak solutions ltd' }}" />
        <meta name="keywords" content="{{ $keywords ?? 'elearning, software, cyber security' }}" />
        <meta name="author" content="Logeak Solutions ltd" />
        <meta name="email" content="hello@logeaksolutions.com" />
        <meta name="website" content="https://www.logeaksolutions.com" />
        <title>{{$title ?? 'LOGEAK '}}</title>


        <!-- Bootstrap Min CSS -->
        <link rel="stylesheet" href="{!! asset('logostheme/css/bootstrap.min.css') !!}">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="{!! asset('logostheme/css/animate.min.css') !!}">
        <!-- FlatIcon CSS -->
        <link rel="stylesheet" href="{!! asset('logostheme/css/flaticon.css') !!}">
        <!-- FlatIcon Two CSS -->
        <link rel="stylesheet" href="{!! asset('logostheme/css/flaticon-two.css') !!}">
        <!-- FlatIcon Three CSS -->
        <link rel="stylesheet" href="{!! asset('logostheme/css/flaticon-three.css') !!}">
        <!-- Odometer Min CSS -->
        <link rel="stylesheet" href="{!! asset('logostheme/css/odometer.min.css') !!}">
        <!-- MeanMenu CSS -->
        <link rel="stylesheet" href="{!! asset('logostheme/css/meanmenu.css') !!}">
        <!-- Magnific Popup Min CSS -->
        <link rel="stylesheet" href="{!! asset('logostheme/css/magnific-popup.min.css') !!}">
        <!-- Nice Select Min CSS -->
        <link rel="stylesheet" href="{!! asset('logostheme/css/nice-select.min.css') !!}">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="{!! asset('logostheme/css/owl.carousel.min.css') !!}">
        <!-- Font Awesome Min CSS -->
        <link rel="stylesheet" href="{!! asset('logostheme/css/fontawesome.min.css') !!}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{!! asset('logostheme/css/style.css') !!}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{!! asset('logostheme/css/responsive.css') !!}">

        <link rel="icon" type="image/png" href="{!! asset('logostheme/img/favicon/favicon.ico') !!}">
    </head>

    <body>

        <!-- Preloader Area -->
        <div class="preloader-area">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
        <!-- End Preloader Area -->

 <!-- Start Navbar Area -->
        @include('layouts.nav')
<!-- End Navbar Area -->

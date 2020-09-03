<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
    <title> @if ($title = ''): $title = 'LOGEAK'; {{$title}} @endif</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="@if ($description = ''): $description = 'LOGEAK'; {{$description}} @endif" />
        <meta name="keywords" content="@if ($keywords = ''): $keywords = 'LOGEAK'; {{$keywords}} @endif" />
        <meta name="author" content="Logeak Solutions ltd" />
        <meta name="email" content="hello@logeaksolutions.com" />
        <meta name="website" content="https://www.logeaksolutions.in" />

        <!-- favicon -->
        <link rel="shortcut icon" href="{!! asset('assets/images/favicon.ico') !!}">
        <!-- Bootstrap -->
        <link href="{!! asset('theme/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{!! asset('theme/css/materialdesignicons.min.css') !!}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
        <!-- Slider -->
        <link rel="stylesheet" href="{!! asset('theme/css/owl.carousel.min.css') !!}"/>
        <link rel="stylesheet" href="{!! asset('theme/css/owl.theme.default.min.css') !!}"/>
        <!-- Main Css -->
        <link href="{!! asset('theme/css/style.css') !!}" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="{!! asset('theme/css/colors/purple.css') !!}" rel="stylesheet" id="color-opt">

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="/">
                        <img src="{!! asset('theme/images/logo-dark.png') !!}" height="24" alt="">
                    </a>
                </div>

                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{route('contactus')}}">Contact Us</a></li>
                        <li><a href="{{route('aboutus')}}">About Us</a></li>
                    </ul><!--end navigation menu-->

                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

        @yield('content')

        <!-- Back to top -->
        <a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

        <!-- javascript -->
        <script src="{!! asset('theme/js/jquery-3.5.1.min.js') !!}"></script>
        <script src="{!! asset('theme/js/bootstrap.bundle.min.js') !!}"></script>
        <script src="{!! asset('theme/js/jquery.easing.min.js') !!}"></script>
        <script src="{!! asset('theme/js/scrollspy.min.js') !!}"></script>
        <!-- SLIDER -->
        <script src="{!! asset('theme/js/owl.carousel.min.js') !!} "></script>
        <script src="{!! asset('theme/js/owl.init.js') !!}"></script>
        <!-- Icons -->
        <script src="{!! asset('theme/js/feather.min.js') !!}"></script>
        <script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
        <!-- Typed -->
        <script src="{!! asset('theme/js/typed.js') !!}"></script>
        <script src="{!! asset('theme/js/typed.init.js') !!}"></script>
        <!-- Counter -->
        <script src="{!! asset('theme/js/counter.init.js') !!}"></script>
        <!-- Parallax -->
        <script src="{!! asset('theme/js/parallax.js') !!}"></script>
        <!-- Main Js -->
        <script src="{!! asset('theme/js/app.js') !!}"></script>
    </body>
</html>

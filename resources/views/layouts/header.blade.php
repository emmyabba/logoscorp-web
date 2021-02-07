<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="@if ($description = ''): $description = 'LOGEAK'; {{$description}} @endif" />
  <meta name="keywords" content="@if ($keywords = ''): $keywords = 'LOGEAK'; {{$keywords}} @endif" />
  <meta name="author" content="Logeak Solutions ltd" />
  <meta name="email" content="hello@logeaksolutions.com" />
  <meta name="website" content="https://www.logeaksolutions.in" />
  <title> @if ($title = ''): $title = 'LOGEAK'; {{$title}} @endif</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700;800;900&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
  <link rel="stylesheet" href="{!! asset('theme/css/libraries.css') !!}">
  <link rel="stylesheet" href="{!! asset('theme/css/style.css') !!}">
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
        <div class="loading">
          <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
        </div>
      </div><!-- /.preloader -->


    <!-- =========================
        Header
    =========================== -->
    <header class="header header-light header-layout2">
      <div class="topbar d-none d-lg-block">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="topbar__contact d-flex flex-wrap list-unstyled mb-0">
                  {{-- <li>
                    <i class="icon-phone"></i><a href="tel:+5565454117">+55 654 541 17</a>
                  </li> --}}
                  <li>
                    <i class="icon-envelope"></i><a href="mailto:hello@logeaksolutions.com">hello@logeaksolutions.com</a>
                  </li>
                  <li>
                    <i class="icon-clock"></i><a href="contact-us.html">Hours: Mon - Fri: 8am – 5pm (GMT +1)</a>
                  </li>
                </ul>
                <div class="d-flex">
                  <ul class="social-icons list-unstyled mb-0 mr-30">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul>
                  <div class="dropdown dropdown__lang">
                    <button class="dropdown-toggle" id="langDrobdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="assets/images/flags/en.png" alt="en"><span>English</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="langDrobdown">
                      <a class="dropdown-item" href="#">
                        <img src="assets/images/flags/fr.png" alt="fr"><span>France</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img src="assets/images/flags/gr.png" alt="gr"><span>germany</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@include('layouts.nav')
    </header><!-- /.Header -->

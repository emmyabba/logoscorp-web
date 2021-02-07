<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="{{ $description ?? 'Logeak solutions ltd' }}" />
  <meta name="keywords" content="{{ $keywords ?? 'elearning, software, cyber security' }}" />
  <meta name="author" content="Logeak Solutions ltd" />
  <meta name="email" content="hello@logeaksolutions.com" />
  <meta name="website" content="https://www.logeaksolutions.in" />
  <title>{{$title ?? 'LOGEAK '}}</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700;800;900&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
  <link rel="stylesheet" href="{!! asset('theme/css/libraries.css') !!}">
  <link rel="stylesheet" href="{!! asset('theme/css/style.css') !!}">
</head>

<body>
  <div class="wrapper">
    {{-- <div class="preloader">
        <div class="loading">
          <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
        </div>
      </div><!-- /.preloader --> --}}


    <!-- =========================
        Header
    =========================== -->
    <header class="header header-light header-layout2">

@include('layouts.nav')
    </header><!-- /.Header -->

@extends('layouts.welcome')

@section('content')

<!-- Hero Start -->
<section class="bg-half bg-light d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            {{-- <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title">Contact Us</h4>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Landrick</a></li>
                                <li class="breadcrumb-item"><a href="#">Page</a></li>
                                <li class="breadcrumb-item"><a href="#">Contact</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact One</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>  <!--end col--> --}}
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Shape Start -->
{{-- <div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div> --}}
<!--Shape End-->
  <!-- Start Contact -->
  <section class="section pb-0">
    <div class="container">
        <div class="row">


            <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card contact-detail text-center border-0">
                    <div class="card-body p-0">
                        <div class="icon">
                            <img src="/theme/images/icon/Email.svg" class="avatar avatar-small" alt="">
                        </div>
                        <div class="content mt-3">
                            <h4 class="title font-weight-bold">Email</h4>
                            <p class="text-muted">We will love to hear from you</p>
                            <a href="mailto:hello@logeaksolutions.com" class="text-primary">hello@logeaksolutions.com</a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card contact-detail text-center border-0">
                    <div class="card-body p-0">
                        <div class="icon">
                            <img src="/theme/images/icon/location.svg" class="avatar avatar-small" alt="">
                        </div>
                        <div class="content mt-3">
                            <h4 class="title font-weight-bold">Location</h4>
                            <p class="text-muted">We are a remote first company, we are </p>
                            <a href="" class="video-play-icon h6 text-primary">E V E R Y W H E R E</a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 order-1 order-md-2">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <img src="images/contact.svg" class="img-fluid" alt="">
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

@endsection

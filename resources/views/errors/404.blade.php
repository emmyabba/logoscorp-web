@extends('layouts.welcome')

@section('content')
<span class="mt-100"></span>
<div class="back-to-home rounded d-none d-sm-block">
    <a href="{{route('welcome')}}" class="btn btn-icon btn-soft-primary"><i data-feather="home" class="icons"></i></a>
</div>

<!-- ERROR PAGE -->
<section class="bg-home d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 text-center">
                <img src="{!! ('theme/images/404.svg')!!}" class="img-fluid" alt="">
                <div class="text-uppercase mt-4 display-3">Oh ! no</div>
                <div class="text-capitalize text-dark mb-4 error-page">Page Not Found</div>

            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-md-12 text-center">
                <a href="{{route('welcome')}}" class="btn btn-outline-primary mt-4">Go home</a>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- ERROR PAGE -->
@endsection

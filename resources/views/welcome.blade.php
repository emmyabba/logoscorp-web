@extends('layouts.welcome')

@section('content')

        <!-- Hero Start -->
        <section class="bg-half-170 d-table w-100" id="home">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7">
                        <div class="title-heading mt-4">
                            <div class="alert alert-light alert-pills shadow" role="alert">
                                <span class="content heading mb-3"> Welcome.</span>
                            </div>
                            <h1 class="heading mb-3">at Logeak, we <span class="element text-primary" data-elements="build software products, deploy eLearning platforms and content, develope Web & Mobile Applications, conduct vulnerability analysis and threat modeling"></span> </h1>
                            <p class="para-desc text-muted">Our solutions automate business processes to improve effeciency and productivity</p>

                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="classic-app-image position-relative">
                            <div class="bg-app-shape position-relative">
                                <img src="{!! asset('theme/images/logeak-hero-image-1.svg')!!}" alt="">
                            </div>
                        </div>

                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Hero End -->


      @endsection

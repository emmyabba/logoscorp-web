@extends('layouts.app')

@section('content')

@include('layouts.hero')

        <!-- Start Solutions Section -->
        <section class="solutions-section ptb-100">
            <div class="container">
                <div class="solutions-title">
                    <span></span>
                    <h3>Solutions tailored to fit your world</h3>
                    <p>We are a technology company that provide cutting edge solutions, helping organizations and individuals achieve more with Logeak as a trusted and valued partner.<br></p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="solutions-area-content">
                            <div class="icon">
                                <i class="flaticon-monitor"></i>
                            </div>
                            <h3>eLearning </h3>
                            <p>Learning and development services such as instructional design, course development, and learning technologies like portals and content platforms</p>
                            <a href="single-services.html" class="">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="solutions-area-content">
                            <div class="icon">
                                <i class="flaticon-it"></i>
                            </div>
                            <h3>Enterprise Software Development </h3>
                            <p>Automate your business processes with scalable software that improves key facets of your enterprise with industry-specific design, build, and deployment of enterprise software solution.</p>
                            <a href="#" class="">Read More</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="solutions-area-content">
                            <div class="icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <h3>Mobile App Development</h3>
                            <p>Go mobile-first with intuitively designed degital products that enable seamless experience across devices and operating systems to create impactful apps that fit your brand and industry.</p>
                            <a href="#" class="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Solutions Section -->

        <!-- Start About Section -->


@endsection

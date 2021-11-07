@extends('layouts.app')

@section('content')

@include('layouts.pageheader')

      <!-- Start Productive Section -->
      <section class="productive-section ptb-100">
        <div class="container">
            <div class="productive-title">
                <span>Why Our services</span>
                <h3>Our Productive Services is Ready</h3>
                <p>Logeak is an international contestant in software engineering with a wide-range of expertise in all the areas needed for reliable software development.
                We provide cutting edge engineering solutions, helping clients untangle complex issues that always emerge during their digital evolution journey.
                </p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="productive-area-content">
                        <div class="icon">
                            <i class="flaticon-headphones"></i>
                        </div>
                        <h3>Customer Assistance</h3>
                        <p>Lorem ipsum dolor sitamet cosectetur adipising elit sed do eiusmod tempor.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="productive-area-content">
                        <div class="icon">
                            <i class="flaticon-tag"></i>
                        </div>
                        <h3>Affordable Prices</h3>
                        <p>Lorem ipsum dolor sitamet cosectetur adipising elit sed do eiusmod tempor.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="productive-area-content">
                        <div class="icon">
                            <i class="flaticon-cyber-security"></i>
                        </div>
                        <h3>Global Presence</h3>
                        <p>Lorem ipsum dolor sitamet cosectetur adipising elit sed do eiusmod tempor.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="productive-area-content">
                        <div class="icon">
                            <i class="flaticon-innovation"></i>
                        </div>
                        <h3>Innovative Ideas</h3>
                        <p>Lorem ipsum dolor sitamet cosectetur adipising elit sed do eiusmod tempor.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="productive-area-content">
                        <div class="icon">
                            <i class="flaticon-content"></i>
                        </div>
                        <h3>Content Marketing</h3>
                        <p>Lorem ipsum dolor sitamet cosectetur adipising elit sed do eiusmod tempor.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="productive-area-content">
                        <div class="icon">
                            <i class="flaticon-unlink"></i>
                        </div>
                        <h3>Pro Building Services</h3>
                        <p>Lorem ipsum dolor sitamet cosectetur adipising elit sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Productive Section -->

    <!-- Start Needs Section -->
    <section class="needs-section pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="needs-area-content">
                        <span>What We do</span>
                        <h3>Your business agency needs a goal Our agency helps to achieve in way</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia.</p>
                        <div class="needs-text">
                            <p><b>8.93</b> (Loremips) um dolor sit amet, consectetur adipisicing elit, sed aliquaem ipsum dolor si Ut enim ad minim venia.</p>
                        </div>
                        <div class="needs-text">
                            <p><b>1.9</b> (importent) um dolor sit amet, consectetur adipisicing elit, sed aliquaem ipsum dolor si Ut enim ad minim venia.</p>
                        </div>
                        <div class="needs-btn">
                            <a href="#" class="needs-btn-one">Discover More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="needs">
                        <img src="assets/img/needs.jpg" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Needs Section -->

    <!-- Start Partner Section -->
    <div class="partner-section pb-100">
        <div class="container">
            <div class="partner-slider owl-carousel owl-theme">
                <div class="partner-item">
                    <a href="#">
                        <img src="assets/img/partnar/1.png" alt="partner">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#">
                        <img src="assets/img/partnar/2.png" alt="partner">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#">
                        <img src="assets/img/partnar/3.png" alt="partner">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#">
                        <img src="assets/img/partnar/4.png" alt="partner">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#">
                        <img src="assets/img/partnar/5.png" alt="partner">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Section -->

    <!-- Start Update Section -->
    <section class="update-section inner-update-section ptb-100">
        <div class="container">
            <div class="update-title">
                <h3>Get Every Single Update</h3>
            </div>
            <form class="update-form">
                <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                <button type="submit">Subscribe Newsletter</button>
                <div id="validator-newsletter" class="form-result"></div>
            </form>
        </div>
        <div class="shape">
            <img src="assets/img/shape/19.png" alt="Images">
        </div>
        <div class="shape-2">
            <img src="assets/img/shape/20.png" alt="Images">
        </div>
    </section>
    <!-- End Update Section -->


@endsection

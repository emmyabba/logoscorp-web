@extends('layouts.app')

@section('content')

  <!-- Start Page Title Area -->
  <div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>{{$title}}</h2>
                    <ul>
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('services')}}">Services</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->


      <!-- Start Productive Section -->
      <section class="productive-section ptb-100">
        <div class="container">
            <div class="productive-title">
                <span>Why Our services</span>
                <h3>Our Productive Services is Ready</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolet, consectetur adipiscing  seore suspendisse ultrices gravir.</p>
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
        <div class="productive-title">
                    <h3>Our Software development life cycle</h3>
                    <p>We employ tested & trusted best practices in building effective enterprise software development. The process is described below</p>
                </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
               
                    
                <div class="faq-accordion">
                    <ul class="accordion">
                        <li class="accordion-item">
                            <a class="accordion-title active" href="javascript:void(0)">
                                <i class="fa fa-plus"></i> 
                               Ideation
                            </a>
                            <p class="accordion-content show">
                            define the scope and purpose of the application. It plots the course and provisions the team to effectively create the software. It also sets boundaries to help keep the project from expanding or shifting from its original purpose.
                            </p>
                        </li>                        
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fa fa-plus"></i> 
                                Requirement definition 
                            </a>
                            <p class="accordion-content">
                            The system and documents are prepared as per the requirement specifications. This helps us define overall system architecture and technology stack. 
                            </p>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fa fa-plus"></i> 
                                Design
                            </a>
                            <p class="accordion-content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                            </p>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fa fa-plus"></i> 
                                Development
                            </a>
                            <p class="accordion-content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                            </p>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fa fa-plus"></i> 
                                Testing
                            </a>
                            <p class="accordion-content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                            </p>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fa fa-plus"></i> 
                                Deployment
                            </a>
                            <p class="accordion-content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                            </p>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fa fa-plus"></i> 
                                Operations and maintenance
                            </a>
                            <p class="accordion-content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                            </p>
                        </li>
                    </ul>
                </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="needs">
                        <img src="/logostheme/img/logeak-software-development-Life-Cycle.jpg" alt="image" width="570px" height="600px">
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

@extends('layouts.app')

@section('content')

        <!-- Start Startup Home Area -->
        <div class="startup-home-area">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-12">
								<div class="hero-content">
                                    <span>We are a startup Agency</span>
									<h1>Business Makes Success <b>Strategy</b></h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolet suspendisse ultrices gravida. </p>
                                    <div class="startup-btn">
                                        <a href="#" class="startup-btn-one">
                                            Get A Quote <i class="fa fa-arrow-right"></i>
                                        </a>
                                        <a href="https://www.youtube.com/watch?v=_ysd-zHamjk" class="startup-btn-two popup-youtube">
                                            Watch The Demo
                                            <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
								</div>
                            </div>

                            <div class="col-lg-6 col-md-12">
								<div class="startup-image">
                                    <img src="{!! asset('theme/img/startup-home/startup.png') !!}" class="wow fadeInUp" data-wow-delay="0.6s" alt="image">
                                </div>
                            </div>
                            <div class="startup-shape">
                                <img src="{!! asset('theme/img/startup-home/startup-shape.png') !!}" alt="image">
                            </div>
						</div>
					</div>
				</div>
            </div>

            <div class="shape-img1">
                <img src="{!! asset('theme/img/shape/1.svg') !!}" alt="image">
            </div>
            <div class="shape-img2">
                <img src="{!! asset('theme/img/shape/2.svg') !!}" alt="image">
            </div>
            <div class="shape-img3">
                <img src="{!! asset('theme/img/shape/3.png') !!}" alt="image">
            </div>
            <div class="shape-img4">
                <img src="{!! asset('theme/img/shape/4.png') !!}" alt="image">
            </div>
            <div class="shape-img5">
                <img src="{!! asset('theme/img/shape/6.png') !!}" alt="image">
            </div>
		</div>
        <!-- End Startup Home Area -->

        <!-- Start Partner Two Area -->
        <div class="partnar-two-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="appreciate">
                            <h3>They Just Appreciate Our Company work</h3>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="partner-slider owl-carousel owl-theme">
                            <div class="partner-item">
                                <a href="#">
                                    <img src="assets/img/partnar/6.png" alt="partner">
                                </a>
                            </div>
                            <div class="partner-item">
                                <a href="#">
                                    <img src="assets/img/partnar/7.png" alt="partner">
                                </a>
                            </div>
                            <div class="partner-item">
                                <a href="#">
                                    <img src="assets/img/partnar/8.png" alt="partner">
                                </a>
                            </div>
                            <div class="partner-item">
                                <a href="#">
                                    <img src="assets/img/partnar/9.png" alt="partner">
                                </a>
                            </div>
                            <div class="partner-item">
                                <a href="#">
                                    <img src="assets/img/partnar/10.png" alt="partner">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Partner Two Area -->

        <!-- Start Solutions Section -->
        <section class="solutions-section ptb-100">
            <div class="container">
                <div class="solutions-title">
                    <span>What We do</span>
                    <h3>Solutions tailored to fit your world</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolet, consectetur adipiscing  seore suspendisse ultrices gravir.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="solutions-area-content">
                            <div class="icon">
                                <i class="flaticon-data"></i>
                            </div>
                            <h3>User-Friendly Behaviour For Business mind people</h3>
                            <p>Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                            <a href="single-services.html" class="">Read More</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="solutions-area-content">
                            <div class="icon">
                                <i class="flaticon-goal"></i>
                            </div>
                            <h3>Business Development All Kind of Business</h3>
                            <p>Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                            <a href="single-services.html" class="">Read More</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="solutions-area-content">
                            <div class="icon">
                                <i class="flaticon-modules"></i>
                            </div>
                            <h3>Management is no risk here if We support you</h3>
                            <p>Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                            <a href="single-services.html" class="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Solutions Section -->

        <!-- Start About Section -->
        <section class="about-section pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="circulate-image">
                            <img src="assets/img/about.jpg" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="about-content-area">
                            <span>About us</span>
                            <h3>Circulate every stage of the strategic business</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed aliquaem ipsum dolor si Ut enim ad minim venia.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                            <div class="about-btn">
                                <a href="about.html" class="about-btn-one">
                                    Discover More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- Start Co-operative Section -->
        <section class="co-operative-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="co-operative-title">
                            <span>The Fame</span>
                            <h2>Co-operative tools for business administration</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="co-operative-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusd tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia.</p>
                        </div>
                    </div>
                </div>

                <div class="co-operative-content">
                    <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube">
                        <i class="fas fa-play"></i>
                    </a>
                    <h3>Perfect tools for business Organization</h3>
                </div>
            </div>
        </section>
        <!-- End Co-operative Section -->

        <!-- Start Counter Area -->
        <section class="counter-area bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-facts">
                            <h3>
                                <span class="odometer" data-count="5890">00</span><span class="sign-icon">+</span>
                            </h3>
                            <p>Completed projects</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-facts">
                            <h3>
                                <span class="odometer" data-count="100">00</span><span class="sign-icon">+</span>
                            </h3>
                            <p>Customer satisfaction</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-facts">
                            <h3>
                                <span class="odometer" data-count="40">00</span><span class="sign-icon">y</span>
                            </h3>
                            <p>Expert Support Team</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-facts">
                            <h3>
                                <span class="odometer" data-count="30">00</span><span class="sign-icon">k</span>
                            </h3>
                            <p>Sales in Count</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counter Area -->

        <!-- Start Grow Section -->
        <section class="grow-section ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="grow-area-content">
                            <span>How it’s Grow</span>
                            <h3>We provide the best service for your customers</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A voluptatibus sint aut laborum obcaecati necessitatibus reprehenderit architecto quod distinctio vitae ipsa repellendus molestias dignissimos quo, corporis.</p>
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="grow-content-bar">
                                        <span>100%</span>
                                        <h3>Financial Services</h3>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="grow-content-bar bg-00a86f">
                                        <span>98%</span>
                                        <h3>Marketing Services</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="grow-btn">
                                <a href="#" class="grow-btn-one">Discover More
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                                <a href="#" class="grow-btn-two">How it’s work
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="grow-image">
                            <img src="assets/img/grow.jpg" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Grow Section -->

        <!-- Start Develop Section -->
        <section class="develop-section pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="develop-image">
                            <img src="assets/img/develop.jpg" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="develop-content-area">
                            <span>our benefits</span>
                            <h3>Momentous things liable to develop a business </h3>
                            <div class="develop-single-area">
                                <div class="icon">
                                    <i class="flaticon-work-time"></i>
                                </div>
                                <h3>Big Data Analysis</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor   dolorem ipsum quia dolor sit amet.</p>
                            </div>

                            <div class="develop-single-area bg-00a86f">
                                <div class="icon">
                                    <i class="flaticon-monitor"></i>
                                </div>
                                <h3>Product Engineering</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor   dolorem ipsum quia dolor sit amet.</p>
                            </div>

                            <div class="develop-single-area bg-07328f">
                                <div class="icon">
                                    <i class="flaticon-it"></i>
                                </div>
                                <h3>Managed IT Service</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor   dolorem ipsum quia dolor sit amet.</p>
                            </div>
                            <div class="develop-btn">
                                <a href="#" class="develop-btn-one">
                                    Discover More
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Develop Section -->

        <!-- Start Blog Section -->
        <section class="blog-section startup-blog pt-100 pb-70">
            <div class="container">
                <div class="blog-title">
                    <span>News update</span>
                    <h3>Check Our Story Slightly</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolet, consectetur adipiscing.</p>
                    <div class="blog-btn">
                        <a href="blog.html" class="blog-btn-one">
                            All Blog
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-image">
                                <a href="single-blog.html">
                                    <img src="assets/img/blog/1.jpg" alt="image">
                                </a>
                            </div>
                            <div class="single-blog-item">
                                <div class="blog-content">
                                    <a href="single-blog.html">
                                        <h3>Boost your Startup agency with Digital Agency</h3>
                                    </a>
                                    <p>Lorem ipsum dolor sit amconsectetur adipiscing elit, sed do eiusmodor.</p>
                                </div>
                                <ul class="blog-list">
                                    <li>
                                        <a href="single-blog.html">
                                            <i class="flaticon-user"></i>
                                            Janathon Doe
                                        </a>
                                    </li>
                                    <li>
                                        <i class="flaticon-appointment"></i>
                                        03 January 2021
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-image">
                                <a href="single-blog.html">
                                    <img src="assets/img/blog/2.jpg" alt="image">
                                </a>
                            </div>
                            <div class="single-blog-item">
                                <div class="blog-content">
                                    <a href="single-blog.html">
                                        <h3>Get the support from the main appointment center</h3>
                                    </a>
                                    <p>Lorem ipsum dolor sit amconsectetur adipiscing elit, sed do eiusmodor.</p>
                                </div>
                                <ul class="blog-list">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-user"></i>
                                            JKapler Done
                                        </a>
                                    </li>
                                    <li>
                                        <i class="flaticon-appointment"></i>
                                        03 January 2021
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="blog-item">
                            <div class="blog-image">
                                <a href="single-blog.html">
                                    <img src="assets/img/blog/3.jpg" alt="image">
                                </a>
                            </div>
                            <div class="single-blog-item">
                                <div class="blog-content">
                                    <a href="single-blog.html">
                                        <h3>The startup is first priority to go ahead Digital Agency</h3>
                                    </a>
                                    <p>Lorem ipsum dolor sit amconsectetur adipiscing elit, sed do eiusmodor.</p>
                                </div>
                                <ul class="blog-list">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-user"></i>
                                            Jandu Jon
                                        </a>
                                    </li>
                                    <li>
                                        <i class="flaticon-appointment"></i>
                                        03 January 2021
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Section -->

        <!-- Start Job Opportunities Section -->
        <section class="job-opportunities ptb-100">
            <div class="container">
                <div class="section-title">
                    <span>Contract us</span>
                    <h3>Work inquiry, Job opportunities</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolet, consectetur adipiscing  seore suspendisse ultrices gravir.</p>
                </div>
                <div class="grow-btn">
                    <a href="contact.html" class="grow-btn-one">Contract us today
                        <i class="fa fa-arrow-right"></i>
                    </a>
                    <a href="#" class="grow-btn-two">Call for more info
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>
        <!-- End Job Oportunities Section -->



@endsection

@extends('layouts.app')

@section('content')

<!-- Start Contact Box Area -->
<section class="contact-box" style="margin-top:">
    <div class="container">
        <div class="section-title">
            <h2>Contact Us</h2>
            <p>We love to hear from you. Tell us about a cool project we can collaborate on  </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-contact-box">
                    <i class="fa fa-map-marker"></i>
                    <div class="content-title">
                        <h3>Address</h3>
                        <p>Abuja Nigeria</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-contact-box">
                    <i class="fa fa-envelope"></i>
                    <div class="content-title">
                        <h3>Email</h3>
                        <a href="mailto:hello@logeaksolutions.com">hello@logeaksolutions.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-contact-box">
                    <i class="fa fa-phone"></i>
                    <div class="content-title">
                        <h3>Phone</h3>
                        <a href="tel:+2348185877551">+234 (0) 818-587-7551</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Box Area -->

<!-- Start Contact Area -->
{{-- <section class="contact-area pb-100">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" required data-error="Please enter your subject" class="form-control" placeholder="Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="default-btn">Send Message</button>

                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End Contact Area -->

@endsection

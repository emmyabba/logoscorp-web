@extends('layouts.app')

@section('content')

<!-- Start Contact Box Area -->
<section class="contact-box" style="margin-top:">
    <div class="container">
        <div class="section-title">
            <h2>Contact Us</h2>
            <p>We'd love to hear from you. <br>Tell us about a cool project you are working on or inquire about our products and services</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="col-md-12">
                    <div class="single-contact-box">
                        <i class="fa fa-map-marker"></i>
                        <div class="content-title">
                            <h3>Address</h3>
                            <p>Abuja Nigeria</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-contact-box">
                        <i class="fa fa-envelope"></i>
                        <div class="content-title">
                            <h3>Email</h3>
                            <a href="mailto:hello@logeaksolutions.com">hello@logeaksolutions.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-contact-box">
                        <i class="fa fa-phone"></i>
                        <div class="content-title">
                            <h3>Phone</h3>
                            <a href="tel:+2348185877551">+234 (0) 818-587-7551</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">

<!-- Start Contact Area -->
<section class="contact-area pb-100">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form">
                        <form method="POST" action="{{route('sendcontactmail')}}">
                            {{csrf_field()}}
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" data-error="Please enter your name" placeholder="Name">
                                    <div class="help-block with-errors" style="color:red">{{ $errors->first('name') }}</div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" data-error="Please enter your email" placeholder="Email">
                                    <div class="help-block with-errors" style="color:red">{{ $errors->first('email') }}</div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                <select name="project_type" id="project_type" data-error="Please enter your subject" class="form-control">
                                        <option value=""> Project type </option>
                                        <option>Web application</option>
                                        <option>eLearning content</option>
                                        <option>eLearning platform</option>
                                        <option>Mobile application</option>
                                        <option>Desktop application</option>
                                    </select>
                                    <div class="help-block with-errors" style="color:red">{{ $errors->first('project_type') }}</div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="budget" id="budget" data-error="Please enter your subject" class="form-control">
                                    <option value=""> Budget </option>  
                                    <option>Below $10,000 </option>  
                                    <option>$10,000 - $30,000 </option>
                                    <option>$40,000 - $70,000 </option>
                                    <option>$80,000 - $100,000 </option>
                                    <option>Above $100,000 </option>
                                    </select>
                                    <div class="help-block with-errors" style="color:red">{{ $errors->first('budget') }}</div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="comment" class="form-control" id="comment" cols="30" rows="6" data-error="Write your message" placeholder="Project Summary"></textarea>
                                    <div class="help-block with-errors" style="color:red">{{ $errors->first('comment') }}</div>
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
</section>
<!-- End Contact Area -->
            </div>
        </div>
    </div>
</section>
<!-- End Contact Box Area -->


@endsection

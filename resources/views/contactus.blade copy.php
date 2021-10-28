@extends('layouts.app')

@section('content')


    <!-- ==========================
        contact layout 1
    =========================== -->
    <section class="contact-layout1">
        <div class="container">
            @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <form class="contact-panel__form" method="post" action="{{route('sendcontactmail')}}">
                @csrf
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title">Get In Touch</h4>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="contact-name">Name (required)</label>
                      <input type="text" class="form-control" placeholder="Name" id="name" name="name"
                        required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="contact-email">Email (required)</label>
                      <input type="email" class="form-control" placeholder="Email" id="email" name="email"
                        required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="contact-Phone">Phone (required)</label>
                      <input type="text" class="form-control" placeholder="Phone" id="Phone" name="phone"
                        required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="contact-website">Website (optional)</label>
                      <input type="text" class="form-control" placeholder="Website (optional)" id="website"
                        name="contact-website">
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group mb-20">
                      <label for="contact-message">Additional Details (optional)</label>
                      <input type="text" class="form-control" placeholder="Describe your inquirey!" id="comment"
                        name="comment"></input>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center  mb-20">
                      <input type="checkbox" class="custom-control-input" id="terms">
                      <label class="custom-control-label" for="terms">I accept the privacy and terms.</label>
                    </div>
                    <button type="submit" class="btn btn__secondary btn__block ">Submit Request</button>
                    <div class="contact-result"></div>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
              <div class="contact-panel__info bg-overlay bg-overlay-primary">
                <div class="bg-img"><img src="{!! asset('theme/images/contact/1.jpg') !!}" alt="banner"></div>
                <div class="contact-block">
                  <h5 class="contact-block__title">Our Locations</h5>
                  <ul class="contact-block__list list-unstyled">
                    <li>Abuja, Lagos, Minna</li>
                  </ul>
                </div><!-- /.contact-panel__info__block -->
                <div class="contact-block">
                  <h5 class="contact-block__title">Quick Contact</h5>
                  <ul class="contact-block__list list-unstyled">
                    <li><a href="mailto:hello@logeaksolutions.com"></a>Email: hello@logeaksolutions.com</li>

                  </ul>
                </div><!-- /.contact-panel__info__block -->
                <div class="contact-block">
                  <h5 class="contact-block__title">Opening Hours</h5>
                  <ul class="contact-block__list list-unstyled">
                    <li>Monday - Friday</li>
                    <li>8 am - 5 pm  </li>
                  </ul>
                </div><!-- /.contact-panel__info__block -->
                <a href="#" class="btn btn__white btn__bordered btn__icon btn__xl">
                  <span>Find Your Solution</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div>
            </div><!-- /.col-lg-5 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.contact layout 1 -->

      <!-- ==========================
         Contact Info
      ============================ -->
      <section class="contact-info pt-0 pb-70">
        <div class="container">
          <div class="row">
            <!-- Contact panel #1 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="contact-info-box">
                <h4 class="contact__info-box-title">Abuja Office</h4>
                <ul class="contact__info-list list-unstyled">
                  <li>Address: Drive 2 Prince and princess estate, Abuja NG</li>
                  <li>Phone: <a href="tel:"></a></li>
                  <li>Hours: Mon-Fri: 8 am – 5 pm GMT + 1</li>
                </ul><!-- /.contact__info-list -->
              </div><!-- /.contact-info-box -->
            </div><!-- /.col-lg-4 -->
            <!-- Contact panel #2 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="contact-info-box">
                <h4 class="contact__info-box-title">Minna Office</h4>
                <ul class="contact__info-list list-unstyled">
                  <li>Address: Suite C1, Peniel Albarka Plaza, Opp. Federal Highcourt, Minna</li>
                  <li>Phone: <a href="tel:"></a></li>
                  <li>Hours: Mon - Fri: 8 am – 5 pm GMT +1</li>
                </ul><!-- /.contact__info-list -->
              </div><!-- /.contact-info-box -->
            </div><!-- /.col-lg-4 -->
            <!-- Contact panel #3 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="contact-info-box">
                <h4 class="contact__info-box-title">Lagos Office</h4>
                <ul class="contact__info-list list-unstyled">
                  <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                  <li>Phone: <a href="tel:"></a></li>
                  <li>Hours: Mon-Fri: 8 am – 5 pm GMT + 1</li>
                </ul><!-- /.contact__info-list -->
              </div><!-- /.contact-info-box -->
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Contact Info -->


@endsection

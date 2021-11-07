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

 <!-- Start Team Section -->
 <section class="team-section inner-team ptb-100">
            <div class="container">
                <div class="team-title">
                    <span>Meet the team </span>
                    <h3>People of LOGEAK</h3>
                    <p></p>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="logostheme/img/team/emmanuel_abba.png" alt="emmanuel Abba">
                            </div>
                            <div class="member-content">
                                <h3>
                                    <a href="#">Emmanuel Abba</a>
                                </h3>
                                <span>CTO</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="logostheme/img/team/sylvester_abba.png" alt="image">
                            </div>
                            <div class="member-content">
                                <h3>
                                    <a href="#">Sylvester Abba </a>
                                </h3>
                                <span>CIO</span>
                            </div>
                        </div>
                    </div>

                
                </div>
            </div>
        </section>
        <!-- End Team Section -->


@endsection

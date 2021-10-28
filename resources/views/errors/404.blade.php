@extends('layouts.app')

@section('content')

        <!-- Start Error Area -->
		<section class="error-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="error-content" style="margin-top: 4rem">
                            <img src="{!! asset('logostheme/img/404.png') !!}" alt="error">
                            <h3>404 error!</h3>
                            <p>I can not find the page you are looking for. It might have been removed, had its name changed or is temporarily unavailable.</p>
                            <a href="{{route('home')}}" class="default-btn-one">
                                Go to Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Error Area -->
@endsection

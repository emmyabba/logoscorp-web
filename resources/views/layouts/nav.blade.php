
 <div class="navbar-area">
    <div class="exto-responsive-nav">
        <div class="container">
            <div class="exto-responsive-menu">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="{!! asset('logostheme/img/logo/logo-dark.png') !!}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="exto-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{!! asset('logostheme/img/logo/logo-dark.png') !!}" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link active">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('services')}}" class="nav-link">
                                Services
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('services.elearning')}}" class="nav-link">elearning</a>
                                    <a href="{{route('services.software')}}" class="nav-link">Software development</a>
                                    <a href="{{route('services.mobile')}}" class="nav-link">Mobile apps</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Products
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="" class="nav-link">ULearn</a>
                                    <a href="" class="nav-link">HESS Homes</a>
                                    <a href="" class="nav-link">Forte</a>
                                    <a href="" class="nav-link">Famz</a>
                                    <a href="" class="nav-link">CV Monger</a>

                                </li>

                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="@if ($description = ''): $description = 'LOGEAK'; {{$description}} @endif" />
  <meta name="keywords" content="@if ($keywords = ''): $keywords = 'LOGEAK'; {{$keywords}} @endif" />
  <meta name="author" content="Logeak Solutions ltd" />
  <meta name="email" content="hello@logeaksolutions.com" />
  <meta name="website" content="https://www.logeaksolutions.in" />
  <title> @if ($title = ''): $title = 'LOGEAK'; {{$title}} @endif</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700;800;900&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
  <link rel="stylesheet" href="{!! asset('theme/css/libraries.css') !!}">
  <link rel="stylesheet" href="{!! asset('theme/css/style.css') !!}">
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
        <div class="loading">
          <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
        </div>
      </div><!-- /.preloader -->


    <!-- =========================
        Header
    =========================== -->
    <header class="header header-light header-layout2">
      <div class="topbar d-none d-lg-block">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="topbar__contact d-flex flex-wrap list-unstyled mb-0">
                  <li>
                    <i class="icon-phone"></i><a href="tel:+5565454117">+55 654 541 17</a>
                  </li>
                  <li>
                    <i class="icon-envelope"></i><a href="mailto:Eteon@7oroof.com">Eteon@7oroof.com</a>
                  </li>
                  <li>
                    <i class="icon-clock"></i><a href="contact-us.html">Hours: Mon-Fri: 8am – 7pm</a>
                  </li>
                </ul>
                <div class="d-flex">
                  <ul class="social-icons list-unstyled mb-0 mr-30">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul>
                  <div class="dropdown dropdown__lang">
                    <button class="dropdown-toggle" id="langDrobdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="assets/images/flags/en.png" alt="en"><span>English</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="langDrobdown">
                      <a class="dropdown-item" href="#">
                        <img src="assets/images/flags/fr.png" alt="fr"><span>France</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img src="assets/images/flags/gr.png" alt="gr"><span>germany</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav mr-auto ml-auto">
              <li class="nav__item  has-dropdown">
                <a href="index.html" data-toggle="dropdown" class="dropdown-toggle nav__item-link active">Home</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="index.html" class="nav__item-link">Home Main</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="home-modern.html" class="nav__item-link">Home Modern</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="home-classic.html" class="nav__item-link">Home Classic</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Company</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="about-us.html" class="nav__item-link">About Us</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="why-us.html" class="nav__item-link">Why Choose Us</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="leadership-team.html" class="nav__item-link">Leadership Team</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="awards.html" class="nav__item-link">Award & Recognition</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="pricing.html" class="nav__item-link">Pricing & Plans</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="faqs.html" class="nav__item-link">Help & FAQs</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="careers.html" class="nav__item-link">Careers</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">IT Solutions</a>
                <ul class="dropdown-menu wide-dropdown-menu">
                  <li class="nav__item">
                    <div class="row mx-0">
                      <div class="col-sm-6 dropdown-menu-col">
                        <a href="it-solutions.html" class="nav__item-link dropdown-menu-title">IT Solutions</a>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">IT
                              Management</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">Cyber
                              Security</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">Cloud
                              Computing</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">IT
                              Consulting</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">Software
                              Dev</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="it-solutions-single.html">IT Support</a>
                          </li>
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6 dropdown-menu-col">
                        <a href="industries.html" class="nav__item-link dropdown-menu-title">Industries</a>
                        <ul class="nav flex-column">
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Education,
                              Non-Profit</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Accounting,
                              Finance</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Government &
                              Public</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="industries-single-industry.html">Energy
                              &
                              Utilities</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link" href="industries-single-industry.html">Legal,
                              Law
                              Firms</a></li> <!-- /.nav-item -->
                          <li class="nav__item"><a class="nav__item-link"
                              href="industries-single-industry.html">Manufacturing</a>
                          </li>
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">News&Media</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="blog.html" class="nav__item-link">Our Blog</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="blog-single-post.html" class="nav__item-link">Single Blog Post</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="case-studies-grid.html" class="nav__item-link">Case Studies Grid</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="case-studies-modern.html" class="nav__item-link">Case Studies Modern</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="case-studies-classic.html" class="nav__item-link">Case Studies Classic</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="case-studies-single.html" class="nav__item-link">Single Case Study</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item  has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Features</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="coming-soon.html" class="nav__item-link">Coming Soon</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="404.html" class="nav__item-link">404 Page</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="#" class="nav__item-link  open-register-popup">Register</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="#" class="nav__item-link  open-login-popup">Login</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="contact-us.html" class="nav__item-link">Contacts</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          <ul class="navbar-actions list-unstyled mb-0 d-flex align-items-center">
            <li class="d-none d-xl-block">
              <a href="request-quote.html" class="btn btn__secondary action__btn-contact">Request A Quote</a>
            </li>
            <li>
              <button class="action__btn action__btn-search">
                <i class="icon-search"></i>
              </button>
            </li>
          </ul><!-- /.navbar-actions -->
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

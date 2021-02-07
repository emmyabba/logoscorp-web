<nav class="navbar navbar-expand-lg sticky-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="{!! asset('theme/images/logo/logo-light.png') !!}" class="logo-light" alt="logo">
        <img src="{!! asset('theme/images/logo/logo-dark.png') !!}" class="logo-dark" alt="logo">
      </a>
      <button class="navbar-toggler" type="button">
        <span class="menu-lines"><span></span></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNavigation">
        <ul class="navbar-nav mr-auto ml-auto">
          <li class="nav__item  has-dropdown">
            <a href="/" class="nav__item-link active">Home</a>
          </li><!-- /.nav-item -->
          <li class="nav__item  has-dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Company</a>
            <ul class="dropdown-menu">
              <li class="nav__item">
                <a href="" class="nav__item-link">About Us</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="" class="nav__item-link">Why Choose Us</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="" class="nav__item-link">Leadership Team</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="" class="nav__item-link">Award & Recognition</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="" class="nav__item-link">Help & FAQs</a>
              </li> <!-- /.nav-item -->
              <li class="nav__item">
                <a href="" class="nav__item-link">Careers</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->
          <li class="nav__item  has-dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">IT Solutions</a>
            <ul class="dropdown-menu wide-dropdown-menu">
              <li class="nav__item">
                <div class="row mx-0">
                  <div class="col-sm-6 dropdown-menu-col">
                    <a href="" class="nav__item-link dropdown-menu-title">IT Solutions</a>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link" href="">IT
                          Management</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="">Cyber
                          Security</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="">Cloud
                          Computing</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="">IT
                          Consulting</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="">Software
                          Dev</a>
                      </li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="">IT Support</a>
                      </li>
                      <!-- /.nav-item -->
                    </ul>
                  </div><!-- /.col-sm-6 -->
                  <div class="col-sm-6 dropdown-menu-col">
                    <a href="" class="nav__item-link dropdown-menu-title">Industries</a>
                    <ul class="nav flex-column">
                      <li class="nav__item"><a class="nav__item-link"
                          href="">Education,
                          Non-Profit</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link"
                          href="">Accounting,
                          Finance</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link"
                          href="">Government &
                          Public</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="">Energy
                          &
                          Utilities</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link" href="">Legal,
                          Law
                          Firms</a></li> <!-- /.nav-item -->
                      <li class="nav__item"><a class="nav__item-link"
                          href="">Manufacturing</a>
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
                <a href="" class="nav__item-link">Our Blog</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="" class="nav__item-link">Single Blog Post</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="" class="nav__item-link">Case Studies Grid</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="" class="nav__item-link">Case Studies Modern</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="" class="nav__item-link">Case Studies Classic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="" class="nav__item-link">Single Case Study</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->
          <li class="nav__item">
            <a href="{{route('contactus')}}" class="nav__item-link">Contacts</a>
          </li><!-- /.nav-item -->
        </ul><!-- /.navbar-nav -->
      </div><!-- /.navbar-collapse -->
      <ul class="navbar-actions list-unstyled mb-0 d-flex align-items-center">
        <li class="d-none d-xl-block">
          <a href="" class="btn btn__secondary action__btn-contact">Request A Quote</a>
        </li>
        <li>
          <button class="action__btn action__btn-search">
            <i class="icon-search"></i>
          </button>
        </li>
      </ul><!-- /.navbar-actions -->
    </div><!-- /.container -->
  </nav><!-- /.navabr -->

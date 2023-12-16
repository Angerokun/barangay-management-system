<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>e-Barangay Management System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" id="css-main" href="{{ asset('css/dashmix.min.css') }}">
    </head>
    <body>
    <div id="page-container" class="sidebar-dark side-scroll page-header-fixed page-header-glass main-content-boxed">

      <!-- Sidebar -->
      <!--
        Sidebar Mini Mode - Display Helper classes

        Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
          If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

        Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
        Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
        Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
      -->
      <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
          <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="fw-semibold text-white tracking-wide" href="index.html">
              <span class="smini-visible">
                D<span class="opacity-75">x</span>
              </span>
              <span class="smini-hidden">
                Dash<span class="opacity-75">mix</span>
              </span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div>
              <!-- Toggle Sidebar Style -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
              <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');">
                <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
              </button>
              <!-- END Toggle Sidebar Style -->

              <!-- Close Sidebar, Visible only on mobile screens -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-times-circle"></i>
              </button>
              <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
          </div>
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
          <!-- Side Navigation -->
          <div class="content-side">
            <ul class="nav-main">
              <li class="nav-main-item">
                <a class="nav-main-link" href="gs_landing.html">
                  <i class="nav-main-link-icon fa fa-newspaper"></i>
                  <span class="nav-main-link-name">News</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="javascript:void(0)">
                  <i class="nav-main-link-icon fa fa-chart-area"></i>
                  <span class="nav-main-link-name">Citizens Charter</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="javascript:void(0)">
                  <i class="nav-main-link-icon fa fa-building"></i>
                  <span class="nav-main-link-name">Services Offered</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="javascript:void(0)">
                  <i class="nav-main-link-icon fa fa-phone"></i>
                  <span class="nav-main-link-name">Contact</span>
                </a>
              </li>
              @if (Route::has('login'))
              <li class="nav-main-item mb-2">
                  <a href="{{ route('login') }}" class="btn btn-primary">
                      Login
                    </a>
              </li>
              @if (Route::has('register'))
              <li class="nav-main-item">
                  <a href="{{ route('register') }}" class="btn btn-outline-primary">
                      Register
                  </a>
              </li>
              @endif
              @endif
            </ul>
          </div>
          <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="d-flex align-items-center">
            <!-- Logo -->
            <a class="link-fx fs-lg fw-semibold text-dark" href="{{ url('/') }}">
              e<span class="text-primary">-Barangay</span>
            </a>
            <!-- END Logo -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="d-flex align-items-center">
            <!-- Menu -->
            <div class="d-none d-lg-block">
              <ul class="nav-main nav-main-horizontal nav-main-hover">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="gs_landing.html">
                    <i class="nav-main-link-icon fa fa-newspaper"></i>
                    <span class="nav-main-link-name">News</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="javascript:void(0)">
                    <i class="nav-main-link-icon fa fa-chart-area"></i>
                    <span class="nav-main-link-name">Citizens Charter</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="javascript:void(0)">
                    <i class="nav-main-link-icon fa fa-building"></i>
                    <span class="nav-main-link-name">Services Offered</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="javascript:void(0)">
                    <i class="nav-main-link-icon fa fa-phone"></i>
                    <span class="nav-main-link-name">Contact</span>
                  </a>
                </li>
                @if (Route::has('login'))
                <li class="nav-main-item">
                    <a href="{{ route('login') }}" class="btn btn-primary">
                        Login
                      </a>
                </li>
                @if (Route::has('register'))
                <li class="nav-main-item">
                    <a href="{{ route('register') }}" class="btn btn-outline-primary">
                        Register
                    </a>
                </li>
                @endif
                @endif
              </ul>
            </div>
            <!-- END Menu -->

            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-alt-secondary d-lg-none ms-1" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-primary">
          <div class="content-header">
            <form class="w-100" method="POST">
              <div class="input-group">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times-circle"></i>
                </button>
                <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
              </div>
            </form>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary-darker">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Hero -->
        <div class="hero hero-lg bg-body-extra-light overflow-hidden">
          <div class="hero-inner">
            <div class="content content-full">
              <div class="row">
                <div class="col-lg-5 text-center text-lg-start d-lg-flex align-items-lg-center">
                  <div>
                    <h1 class="h2 fw-bold mb-3">
                      Product Title
                    </h1>
                    <p class="fs-4 text-muted mb-5">
                      Lead paragraph containing the main purpose of your product.
                    </p>
                    <div>
                      <a class="btn btn-primary px-3 py-2 m-1" href="javascript:void(0)">
                        <i class="fa fa-fw fa-link opacity-50 me-1"></i> Call to action
                      </a>
                      <a class="btn btn-alt-primary px-3 py-2 m-1" href="javascript:void(0)">
                        <i class="fa fa-fw fa-link opacity-50 me-1"></i> Call to action
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 offset-lg-1 d-none d-lg-block">
                  <img class="img-fluid rounded" src="assets/media/various/promo_dashboard.png" srcset="assets/media/various/promo_dashboard@2x.png 2x"  alt="Hero Promo">
                </div>
              </div>
            </div>
          </div>
          <div class="hero-meta">
            <div>
              <span class="d-inline-block animated bounce infinite">
                <i class="si si-arrow-down text-muted fa-2x"></i>
              </span>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Section 1 -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="py-5 push">
              <h2 class="mb-2 text-center">
                Title 1
              </h2>
              <h3 class="text-muted mb-0 text-center">
                Subtitle
              </h3>
            </div>
            <div class="text-center">
              <p>
                Your content..
              </p>
            </div>
          </div>
        </div>
        <!-- END Section 1 -->

        <!-- Section 2 -->
        <div class="bg-body-extra-light">
          <div class="content content-full">
            <div class="py-5 push">
              <h2 class="mb-2 text-center">
                Title 2
              </h2>
              <h3 class="text-muted mb-0 text-center">
                Subtitle
              </h3>
            </div>
            <div class="text-center">
              <p>
                Your content..
              </p>
            </div>
          </div>
        </div>
        <!-- END Section 2 -->

        <!-- Section 3 -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="py-5 push">
              <h2 class="mb-2 text-center">
                Title 3
              </h2>
              <h3 class="text-muted mb-0 text-center">
                Subtitle
              </h3>
            </div>
            <div class="text-center">
              <p>
                Your content..
              </p>
            </div>
          </div>
        </div>
        <!-- END Section 3 -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer" class="footer-static bg-body-extra-light">
        <div class="content py-4">
          <!-- Footer Navigation -->
          <div class="row items-push fs-sm border-bottom pt-4">
            <div class="col-6 col-md-4">
              <h3 class="fw-semibold">Category</h3>
              <ul class="list list-simple-mini">
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #1
                  </a>
                </li>
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #2
                  </a>
                </li>
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #3
                  </a>
                </li>
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #4
                  </a>
                </li>
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #5
                  </a>
                </li>
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #6
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <h3 class="fw-semibold">Category</h3>
              <ul class="list list-simple-mini">
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #1
                  </a>
                </li>
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #2
                  </a>
                </li>
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #3
                  </a>
                </li>
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #4
                  </a>
                </li>
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #5
                  </a>
                </li>
                <li>
                  <a class="fw-semibold" href="javascript:void(0)">
                    <i class="fa fa-fw fa-link text-primary-lighter me-1"></i> Link #6
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <h3 class="fw-semibold">Company</h3>
              <div class="fs-sm push">
                1080 Sunshine Valley, Suite 2563<br>
                San Francisco, CA 85214<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
              </div>
              <h3 class="fw-semibold">Subscribe to our news</h3>
              <form>
                <div class="input-group">
                  <input type="email" class="form-control form-control-alt" id="dm-gs-subscribe-email" name="dm-gs-subscribe-email" placeholder="Your email..">
                  <button type="submit" class="btn btn-alt-primary">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
          <!-- END Footer Navigation -->

          <!-- Footer Copyright -->
          <div class="row fs-sm pt-4">
            <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
              Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="/" target="_blank">Angerokun</a>
            </div>
            <div class="col-sm-6 order-sm-1 text-center text-sm-start">
              <a class="fw-semibold" >Electronic Barangay Management 1.0</a> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
          <!-- END Footer Copyright -->
        </div>
      </footer>
      <!-- END Footer -->
    </div>

    <script src="{{ asset('js/dashmix.app.min.js') }}"></script>
  </body>
</html>

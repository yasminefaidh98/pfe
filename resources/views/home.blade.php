<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Favicons -->
<link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
<link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

<!-- =======================================================
* Template Name: FlexStart - v1.1.1
* Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center">
      <img src="{{ asset('assets/img/logo2.png') }}" alt="">
      <span></span>
    </a>

    <nav id="navbar" class="navbar">
      <ul>
<li class="nav-item dropdown">
   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('logout') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
    </a>   
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
         </form>
     </div>
  </li>  


        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
       <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>

        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        <li></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>    <!-- .navbar -->

  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->




<main id="main">

  <!-- ======= Values Section ======= -->
  <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2></h2>
          <p>Nos modules </p>
        </header>

        <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">

            <div class="service-box red">
               <i>
               <img src="{{ asset('assets/img/stock2.png') }}" class="img-fluid" alt="">

                </i>
              <h3>Gestion de stock et Dépots </h3>
              <p></p>
              <a href="/articles" class="read-more"><span>Go!</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <i >
              <img src="{{ asset('assets/img/achat.png') }}" class="img-fluid" alt="">

              </i>
              <h3>Gestion commerciale </h3>
              <p></p>
              <a href="/ventes" class="read-more push-left "><span>Ventes</span> <i class="bi bi-arrow-right"></i></a>
              <a href="/achats" class="read-more push-left "><span>Achats</span> <i class="bi bi-arrow-right"></i></a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <i >
              <img src="{{ asset('assets/img/caisse.png') }}" class="img-fluid" alt="">

              </i>
              <h3>Trésorerie</h3>
              <p></p>
              <a href="#" class="read-more"><span>Go!</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </div>

  </section><!-- End Values Section -->




      </div><!-- End Feature Tabs -->
<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>



    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <meta content="" name="description">

<meta content="" name="keywords">


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

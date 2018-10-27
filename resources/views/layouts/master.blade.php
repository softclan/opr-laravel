<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Oprextra | @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
   <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}} ">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}} ">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}} ">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/animate/animate.css')}} ">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/css-hamburgers/hamburgers.min.css')}} ">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/animsition/css/animsition.min.css')}} ">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/select2/select2.min.css')}} ">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/daterangepicker/daterangepicker.css')}} ">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/util.css')}} ">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/main.css')}} ">
     <!-- theme stylesheet-->
     <link rel="stylesheet" href="{{asset('frontend/css/style.default.css')}} " id="theme-stylesheet">
     <!-- Custom stylesheet - for your changes-->
     <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}} ">
      <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}} ">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('frontend/vendor/font-awesome/css/font-awesome.min.css')}} ">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="{{asset('frontend/css/fontastic.css')}} ">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- Fancybox-->
    <link rel="stylesheet" href="{{asset('frontend/vendor/@fancyapps/fancybox/jquery.fancybox.min.css')}} ">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    
  </head>
  <body>
    <header class="header">
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <form action="#">
                  <div class="form-group">
                    <input type="search" name="search" id="search" placeholder="What are you looking for?">
                    <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Navbar Brand -->
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <!-- Navbar Brand --><a href="/" class="navbar-brand header">Oprextra</a>
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="#" class="nav-link">About Us</a>
              </li>
              <li class="nav-item"><a href="/testimonials" class="nav-link ">Testimonial</a>
              </li>
              <li class="nav-item"><a href="#" class="nav-link ">Contact Us</a>
              </li>
              @auth
               <li class="nav-item"><a href="/logout" class="nav-link login">Logout</a> {{Auth::user()->name}}
              @else
              <li class="nav-item"><a href="/login" class="nav-link login">Login</a>
              </li>
              <li class="nav-item"><a href="/register" class="nav-link register">Register</a>
              </li>
              @endauth
            </ul>
        </div>
      </nav>
    </header>
    <!-- Hero Section-->
    @yield('content')
    <!-- Page Footer-->
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="logo">
              <h6 class="text-white">Oprextra</h6>
            </div>
            <div class="contact-details">
              <p>Phone: (+234) 812 283 6403</p>
              <p>Email: <a href="mailto:info@opextra.com">Info@Oprextra.com</a></p>
              <ul class="social-menu">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="menus d-flex">
              <ul class="list-unstyled">
                <li> <a href="userdashboard.html">My Account</a></li>
                <li> <a href="#">Trending News</a></li>
                <li> <a href="#">Popular News</a></li>
                <li> <a href="#">Privacy &amp; Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2018. All rights reserved. Oprextra.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}} "></script>
    <script src="{{asset('frontend/vendor/popper.js/umd/popper.min.js')}} "> </script>
    <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.min.js')}} "></script>
    <script src="{{asset('frontend/vendor/jquery.cookie/jquery.cookie.js')}} "> </script>
    <script src="{{asset('frontend/vendor/@fancyapps/fancybox/jquery.fancybox.min.js')}} "></script>
    <script src="{{asset('frontend/js/front.js')}} "></script>
  </body>
</html>
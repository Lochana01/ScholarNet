<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ScholarNet</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon-16x16.png">
  <link rel="manifest" href="./assets/img/site.webmanifest"> -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="{{ asset('assets/main/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/main/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/main/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/main/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/main/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/main/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/main/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/main/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ url('/index') }}">ScholarNet</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="#" href="{{ url('/index') }}">Home</a></li>
          <li><a href="{{ url('/about') }}">About</a></li>
          <!-- <li><a href="{{ url('/courses') }}">Courses</a></li>
          <li><a href="{{ url('/trainers') }}">Trainers</a></li> -->
          <li><a href="{{ url('/events') }}">Events</a></li>
          <li><a href="{{ url('/pricing') }}">Pricing</a></li>

          <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="{{ url('/login')}}" class="get-started-btn">Get Started</a>

    </div>
  </header>

  @yield('content')

  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>ScholarNet</h3>
            <p>
              No.69 Tickle Street <br>
              New Highway, Colombo<br>
              Sri Lanka <br><br>
              <strong>Phone:</strong> +94 70 420 6666<br>
              <strong>Email:</strong> scholar@gamil.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/index') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/about') }}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/contact') }}">Contact us</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Sign up for our newsletter now and get access to a wealth of information. Join our active learning community and let's set off on a road of continual improvement together!</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>ScholarNet</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- Designed by Pradu and team -->
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="{{ asset('assets/main/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/main/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/main/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/main/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/main/vendor/php-email-form/validate.js') }}"></script>

  <script src="{{ asset('assets/main/js/main.js') }}"></script>

</body>

</html>
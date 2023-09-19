<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ScholarNet LMS</title>
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
  <link href="{{ asset('assets/lms/css/event.css') }}" rel="stylesheet">

</head>

<body>

  <header id="header" class="mb-5">
    <div class="container d-flex">

      <h1 class="logo"><a href="{{ url('/main_lms') }}">ScholarNet</a></h1>


    </div>

    <div class="container">
      <nav id="navbar" class="navbar mt-3">
        <ul class="justify-content-start">
          <li><a class="#" href="{{ url('/main_lms') }}">Home</a></li>
          <li><a href="{{ url('/#') }}">Dashboard</a></li>
          <li><a href="/lms_event">Events</a></li>
          <!-- <li><a href="{{ url('/#') }}">Courses</a></li> -->
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ url('/#') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Modules
              </a>
              <ul class="dropdown-menu">
                  @php
                      $moduleController = app('App\Http\Controllers\ModuleController');
                      $moduleTitles = $moduleController->retrieveModuleTitlesForUser();
                  @endphp

                  @if (!empty($moduleTitles))
                      @foreach ($moduleTitles as $moduleTitle)   
                          <a href="{{ route('module.show', ['moduleTitle' => $moduleTitle]) }}">
                              <li class="nav-link fw-bold text-center">{{ $moduleTitle }}</li>
                          </a>  
                      @endforeach
                  @else
                      <li class="nav-link">No Modules Available</li>
                  @endif
              </ul>
          </li>
          <li><a href="{{ url('/lms_discussion_view') }}">Discussions</a></li>


          
        </ul>
        <ul class="justify-content-end">
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url('/#') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">View profile</a></li>
              <li><a class="dropdown-item" href="#">Edit profile</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li> -->
          <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
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
              <li><i class="bx bx-chevron-right"></i> <a href="/main_lms">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/lms_discussion">Discussion</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/lms_feedback">Feedback</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
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
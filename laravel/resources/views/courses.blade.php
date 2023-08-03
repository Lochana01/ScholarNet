@extends('layouts.main_template')

@section('content')

    <main id="main" data-aos="fade-in">

    <div class="breadcrumbs">
      <div class="container">
        <h2>Courses</h2>
        <p>With our wide selection of interesting and informative courses, join ScholarNet LMS today and start your path of continuous learning. Utilize our engaging online learning environment to take the next step in your career and personal development. </p>
      </div>
    </div>

    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{ asset('assets/main/img/course-1.jpg') }}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Web Development</h4>
                  <p class="price">Rs.35,000</p>
                </div>

                <h3><a href="#">Website Design</a></h3>
                <p>The goal of our web design course is to provide students with the skills and knowledge necessary to develop websites that are both aesthetically pleasing and user-friendly.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="{{ asset('assets/main/img/trainers/trainer-1.jpg') }}" class="img-fluid" alt="">
                    <span>Pradikshan</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="{{ asset('assets/main/img/course-2.jpg') }}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Marketing</h4>
                  <p class="price">Rs.75,000</p>
                </div>

                <h3><a href="#">Search Engine Optimization</a></h3>
                <p>Our Search Engine Optimization (SEO) training program is a thorough curriculum created to assist students in mastering the art and science of optimizing websites to increase their exposure in search engine results.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="{{ asset('assets/main/img/trainers/trainer-2.jpg') }}" class="img-fluid" alt="">
                    <span>Lahiru</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;42
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="{{ asset('assets/main/img/course-3.jpg') }}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Content</h4>
                  <p class="price">Rs.45,000</p>
                </div>

                <h3><a href="#">Copywriting</a></h3>
                <p>You'll master the fundamentals of compelling copywriting throughout the course, including how to identify target markets, create a distinctive brand voice, and organize messages that are convincing.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="{{ asset('assets/main/img/trainers/trainer-3.jpg') }}" class="img-fluid" alt="">
                    <span>Tharusha</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;85
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

  </main>

@endsection
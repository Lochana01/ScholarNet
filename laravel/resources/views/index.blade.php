@extends('layouts.main_template')

@section('content')

    <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>With Great Education,<br>Comes Great Knowledge</h1>
        <h2>A great place for education</h2>
        <a href="{{ url('/pricing') }}" class="btn-get-started">Start Out</a>
    </div>
    </section>

  <main id="main">

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ asset('assets/main/img/index.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h2>What is ScholarNet?</h2>
            <p class="fst-italic">
            ScholarNet is a revolutionary online learning platform with a mission to provide a comprehensive and cutting-edge educational experience. The platform functions as a Learning Management System (LMS) and is designed to empower both educators and students in their pursuit of knowledge.
            </p>
            <br>
            <p>
              At ScholarNet, we believe in democratizing education and making it enjoyable for all. Our vision is to break down barriers and make learning limitless, anticipating a future where education knows no bounds.
            </p>
            <p>
              The platform boasts an easy-to-use LMS interface, ensuring a seamless user experience for both students and teachers. Navigating the system and leveraging its capabilities is made simple and efficient, allowing users to focus on learning and teaching.
            </p>
            <p>
              We take pride in our dedicated support team, always ready to assist and address any questions or concerns you may have. Your learning journey is our priority, and we are committed to making it as smooth and enjoyable as possible.
            </p>
            <!-- <ul>
              <li><i class="bi bi-check-circle"></i> </li>
              <li><i class="bi bi-check-circle"></i> </li>
              <li><i class="bi bi-check-circle"></i> </li>
            </ul> -->
            <p class="fw-bold">
            With ScholarNet, embrace the future of education and join us in our mission to transform the way knowledge is acquired and shared. Empower yourself with the vast opportunities that await you on our platform. Let's embark on this educational journey together.
            </p>

          </div>
        </div>

      </div>
    </section>

    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="4873" data-purecounter-duration="1" class="purecounter"></span>
            <p>Customers</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="1" class="purecounter"></span>
            <p>Partnerships</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="69" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" class="purecounter"></span>
            <p>Services</p>
          </div>

        </div>

      </div>
    </section>

    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose ScholarNet?</h3>
              <p>
                We have years of expertise in the area of online learning and are familiar with the particular difficulties and needs of students in a virtual setting. Our LMS has been rigorously built by our team of subject matter experts to match the demands of contemporary learners, delivering a high-quality and successful learning experience.
              </p>
              <div class="text-center">
                <a href="{{ url('/about') }}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bi bi-person-circle"></i>
                    <br>
                    <br>
                    <br>
                    <h4>Integrated User Experience</h4>
                    <p>Our LMS was created with the user's experience in mind and is intuitive, user-friendly, and simple to use.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bi bi-hand-thumbs-up-fill"></i>
                    <br><br><br>
                    <h4>Convenience and Flexibility</h4>
                    <p>The simplicity and adaptability of our LMS are two of its main benefits.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bi bi-arrow-up-circle-fill"></i>
                    <br><br><br>
                    <h4>Continuous Updates and Learning</h4>
                    <p>We are dedicated to remaining on top of technological developments and market trends.</p>
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
@extends('layouts.main_template')

@section('content')

    <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>With Great Education,<br>Comes Great Knowledge</h1>
        <h2>A great place for education</h2>
        <a href="courses.html" class="btn-get-started">Start Out</a>
    </div>
    </section>

  <main id="main">

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>What you can expect from ScholarNet.</h3>
            <p class="fst-italic">
              Our goal at ScholarNet is to offer a comprehensive and cutting-edge platform for online learning. Our LMS offers a seamless and interesting learning experience and is made to empower educators and students alike.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Our goal is to open up education to everyone and make it entertaining.</li>
              <li><i class="bi bi-check-circle"></i> Learning will be limitless in the future, as we anticipate.</li>
              <li><i class="bi bi-check-circle"></i> Utilize the easy LMS interface for a seamless user experience, ensuring that both students and teachers can easily navigate and make use of the capabilities.</li>
            </ul>
            <p>
              If you have any questions or need assistance, feel free to contact our dedicated support team at any time. We are here to make sure your learning journey is smooth and enjoyable. 
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
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="69" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" class="purecounter"></span>
            <p>Trainers</p>
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
                <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
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

    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>Our Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Web Development</h4>
                  <p class="price">Rs.35,000</p>
                </div>

                <h3><a href="#">Website Design</a></h3>
                <p>The goal of our web design course is to provide students with the skills and knowledge necessary to develop websites that are both aesthetically pleasing and user-friendly.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
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
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Marketing</h4>
                  <p class="price">Rs.75,000</p>
                </div>

                <h3><a href="#">Search Engine Optimization</a></h3>
                <p>Our Search Engine Optimization (SEO) training program is a thorough curriculum created to assist students in mastering the art and science of optimizing websites to increase their exposure in search engine results.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
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
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Content</h4>
                  <p class="price">Rs.45,000</p>
                </div>

                <h3><a href="#">Copywriting</a></h3>
                <p>You'll master the fundamentals of compelling copywriting throughout the course, including how to identify target markets, create a distinctive brand voice, and organize messages that are convincing.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
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

    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Pradikshan Balasubramaniam</h4>
                <span>Web Development</span>
                <p>
                  Welcome to ScholarNet LMS' renowned Web Development Trainer, Pradikshan Balasubramaniam. Pradikshan Balasubramaniam is a respected authority in his profession with more than ten years of expertise in the web development industry.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Lahiru Bandara</h4>
                <span>Marketing</span>
                <p>
                  Salutations to Lahiru Bandara, our engaging marketing instructor at ScholarNet LMS. Lahiru offers a plethora of experience and knowledge to the online classroom because to her varied marketing career and love of teaching.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Tharusha Nanayakkara</h4>
                <span>Content</span>
                <p>
                  Welcome to ScholarNet LMS's specialized Content Trainer, Tharusha Nanayakkara. Tharusha is an accomplished content strategist and producer who has a love for guiding others to success in the skill of producing interesting and meaningful content.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

  </main>

@endsection
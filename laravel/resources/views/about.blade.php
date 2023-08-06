@extends('layouts.main_template')

@section('content')

    <main id="main">

    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
        <p>ScholarNet LMS is a user-friendly, cutting-edge Learning Management System created to assist trainers and educators in providing top-notch online learning experiences. </p>
      </div>
    </div>

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ asset('assets/main/img/about.jpg') }}" class="img-fluid" alt="">
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

    <!-- <section id="counts" class="counts section-bg">
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
    </section> -->

    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What are they saying</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('assets/main/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                  <h3>Ayantha Senevirathne</h3>
                  <h4>CEO &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Working with Scholarnet for a number of years has been a pleasure, and I can state with certainty that their creative ideas have played a crucial role in advancing our company. They have been an important partner in our success because of their team's devotion, knowledge, and superior customer service.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('assets/main/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                  <h3>Chamudika Pallewela</h3>
                  <h4>Administrative Head at Hillwood College</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    I have the freedom to develop cutting-edge and significant solutions for students at Hillwood College Kandy with   Scholarnet LMS. Designing the educational landscape of the future is a fascinating endeavor!
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('assets/main/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                  <h3>Maryam Mashkoora</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    For our store's training, Scholarnet LMS has proven revolutionary. Our workforce like it, finds it to be simple to use, and it has dramatically increased worker performance and knowledge.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('assets/main/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                  <h3>Ruchintha Tennakoon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    An independent contractor's paradise, Scholarnet LMS! It makes course building easier and helps my eLearning products stand out with interesting material and fluid interactivity.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('assets/main/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                  <h3>Amindu Weerawardhane</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    My education startup flourished as a result of Scholarnet LMS! The effectiveness and functionality of the platform allowed me to concentrate on growing my company and provide excellent educational opportunities.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>

  </main>

@endsection
@extends('layouts.main_template')

@section('content')

    <main id="main" data-aos="fade-in">

    <div class="breadcrumbs">
      <div class="container">
        <h2>Trainers</h2>
        <p>Our outstanding Trainers will be taking you on this transforming learning trip. Utilize Scholarnet LMS to realize your full potential, take advantage of new chances, and broaden your horizons. </p>
      </div>
    </div>

    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ asset('assets/main/img/trainers/trainer-1.jpg') }}" class="img-fluid" alt="">
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
              <img src="{{ asset('assets/main/img/trainers/trainer-4.jpg') }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Lochana Tennakoon</h4>
                <span>Database</span>
                <p>
                  With years of expertise and a strong love for databases and data management, Lochana Tennakoon is a knowledgeable database trainer. In his training sessions, Lochana offers a special fusion of knowledge and useful insights thanks to his years of practical experience in developing, implementing, and optimizing databases.
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
              <img src="{{ asset('assets/main/img/trainers/trainer-3.jpg') }}" class="img-fluid" alt="">
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
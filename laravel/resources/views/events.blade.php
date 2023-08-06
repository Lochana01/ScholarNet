@extends('layouts.main_template')

@section('content')

    <main id="main">

    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Events</h2>
        <p>In ScholarNet we are making sure our students and lecturers are interacting with eachother everytime. To make this happen we are hosting events regularly.  </p>
      </div>
    </div>

    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/main/img/events-1.jpg') }}" alt="..." height="425">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Agile Workshop</a></h5>
                <p class="fst-italic text-center">Monday, July 27th at 9:00 am</p>
                <p class="card-text">What is the Agile methodology? The Agile methodology is a project management approach that involves breaking the project into phases and emphasizes continuous collaboration and improvement. Teams follow a cycle of planning, executing, and evaluating.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/main/img/events-2.jpg') }}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">CV Writing Workshop</a></h5>
                <p class="fst-italic text-center">Monday, July 20th at 8:00 am</p>
                <p class="card-text">What is a CV? A CV, which stands for curriculum vitae (a Latin phrase meaning 'course of life'), is a document used when applying for jobs. It allows you to summarise your education, skills and relevant work experience enabling you to successfully sell your abilities to potential employers.</p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

  </main>

@endsection
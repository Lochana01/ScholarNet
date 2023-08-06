@extends('layouts.main_template')

@section('content')

    <main id="main">
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Pricing</h2>
        <p>With ScholarNet you can get a wide range of course section. With ScholarNet you can get all your work done by just following the tutorials and the work given by the lecturers. Start you course today!! </p>
      </div>
    </div>

    <section id="pricing" class="pricing">
      <div class="container center" data-aos="fade-up">

        <div class="row justify-content-center">

          <!-- <div class="col-lg-3 col-md-6">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>Rs.</sup>0<span> / month</span></h4>
              <ul>
                <li>Agile Basic</li>
                <li>Networking Basic</li>
                <li>Web Development Basic</li>
                <li class="na">Cyber Security Basic</li>
                <li class="na">Copy Writing Basic</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Start Today</a>
              </div>
            </div>
          </div> -->

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box">
              <h3>Basic Plan</h3>
              <h4><sup>Rs.</sup>120 000<span> / month</span></h4>
              <ul>
                <li>Access to the core Learning Management System (LMS) platform</li>
                <li>Essential features for course creation and management</li>
                <li>Basic user management and enrollment options</li>
                <li>Standard customer support</li>
              </ul>
              <div class="btn-wrap">
                <a href="{{ url('/contact') }}" class="btn-buy">Start Today</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Ultimate Plan</h3>
              <h4><sup>Rs.</sup>250 000<span> / month</span></h4>
              <ul>
                <!-- <li>All features from the Basic Plan</li> -->
                <li>Advanced customisation options for branding the LMS</li>
                <li>Enhanced user management and reporting tools</li>
                <li>API access for integration with other systems</li>
                <li>Priority customer support</li>
              </ul>
              <div class="btn-wrap">
                <a href="{{ url('/contact') }}" class="btn-buy">Start Today</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Premium Plan</h3>
              <h4><sup>Rs.</sup>450 000<span> / month</span></h4>
              <ul>
                <!-- <li>All features from the Ultimate Plan</li> -->
                <li>Dedicated account manager</li>
                <li>Comprehensive training and onbroading support</li>
                <li>Premium security and data protection features</li>
                <li>Custom development options and additional add-ons</li>
              </ul>
              <div class="btn-wrap">
                <a href="{{ url('/contact') }}" class="btn-buy">Start Today</a>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>Rs.</sup>25 000<span> / month</span></h4>
              <ul>
                <li>Agile Advanced</li>
                <li>Networking Advanced</li>
                <li>Web Development Advanced</li>
                <li>Cyber Security Advanced</li>
                <li>Copy Writing Advanced</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Start Today</a>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section>

  </main  


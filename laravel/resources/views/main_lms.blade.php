@extends('layouts.lms_template')

@section('content')

  <h1 class="ms-5">
    News Feed
  </h1>

  <div class="image-container d-flex justify-content-evenly mb-5">
    <img src="{{ asset('assets/lms/img/Halloween events.png') }}" style="width: 40%; height: auto;" alt="Image 1">
    <img src="{{ asset('assets/lms/img/Music Events.png') }}" style="width: 40%; height: auto;" alt="Image 2">
  </div>


    <div class="card">
        <div class="card-header">
        Exciting New Courses Added
        </div>
        <div class="card-body">
        <h5 class="card-title">Explore our latest course additions spanning diverse subjects to cater to your learning needs, Check out our updated course catalog and start your educational journey today.</h5>
        <!-- <p class="card-text">Explore our latest course additions spanning diverse subjects to cater to your learning needs, Check out our updated course catalog and start your educational journey today.</p> -->
        </div>
    </div>

    <div class="card my-5 mx-3">
        <div class="card-header">
        Featured Instructor of the Month
        </div>
        <div class="card-body">
        <h5 class="card-title">Discover our monthly spotlight on an outstanding instructor who brings expertise and passion to the Scholar Net LMS platform and explore their specialized courses to expand your knowledge.</h5>
        <!-- <p class="card-text">Explore our latest course additions spanning diverse subjects to cater to your learning needs, Check out our updated course catalog and start your educational journey today.</p> -->
        </div>
    </div>

    <div class="card my-5 mx-3">
        <div class="card-header">
        Tips for Effective Online Learning
        </div>
        <div class="card-body">
        <h5 class="card-title">Find valuable insights and tips in our new blog post to optimize your online learning experience and enhance your productivity, time management and participation skills.</h5>
        <!-- <p class="card-text">Explore our latest course additions spanning diverse subjects to cater to your learning needs, Check out our updated course catalog and start your educational journey today.</p> -->
        </div>
    </div>

    <div class="card my-5 mx-3">
        <div class="card-header">
        Join Our Global Community
        </div>
        <div class="card-body">
        <h5 class="card-title">Connect with learners from around the world. Engage in discussions, share experiences and explore diverse perspectives in our international forums.</h5>
        <!-- <p class="card-text">Explore our latest course additions spanning diverse subjects to cater to your learning needs, Check out our updated course catalog and start your educational journey today.</p> -->
        </div>
    </div>

    <div class="card my-5 mx-3">
        <div class="card-header">
        Save the Date: Annual Scholar Net LMS Conference
        </div>
        <div class="card-body">
        <h5 class="card-title">Mark your calendar for our annual conference a gathering of educators, learners and industry leaders. Stay tuned for registration details and event updates.</h5>
        <!-- <p class="card-text">Explore our latest course additions spanning diverse subjects to cater to your learning needs, Check out our updated course catalog and start your educational journey today.</p> -->
        </div>
    </div>

    
<!-- <h2>Exciting New Courses Added</h2>
<p>Explore our latest course additions spanning diverse subjects to cater to your learning needs, Check out our updated course catalog and start your educational journey today.</p> -->

<!-- <h2>Featured Instructor of the Month</h2>
<p>Discover our monthly spotlight on an outstanding instructor who brings expertise and passion to the Scholar Net LMS platform and explore their specialized courses to expand your knowledge.</p>

<h2>Tips for Effective Online Learning</h2>
<p>Find valuable insights and tips in our new blog post to optimize your online learning experience and enhance your productivity, time management and participation skills.</p>

<h2>Join Our Global Community</h2>
<p>Connect with learners from around the world. Engage in discussions, share experiences and explore diverse perspectives in our international forums.</p>

<h2>Student Success Story</h2>
<p>Be inspired by the journey of a Scholar Net LMS student who achieved career success through our platform. Read their story in our success stories section.</p>

<h2>Save the Date: Annual Scholar Net LMS Conference</h2>
<p>Mark your calendar for our annual conference a gathering of educators, learners and industry leaders. Stay tuned for registration details and event updates.</p> -->

<!-- <h2>Featured Video</h2>
<iframe width="100%" height="315" src="https://youtu.be/viHILXVY_eU?feature=shared" frameborder="0" allowfullscreen></iframe> -->
@endsection
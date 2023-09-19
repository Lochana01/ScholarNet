@extends('layouts.lms_template')

@section('content')


<div class="container mb-5 mt-5">
<h1>Feedback/Inquires</h1>
<div class="mb-5 fw-bold">
    <p>
        At ScholarNet, we are committed to providing the best possible service to our students and teachers. We value your feedback and inquiries, and we strive to respond to them in a timely and professional manner.
        <br>
        <br>
        Your input helps us improve our products and services, and we appreciate your support. Please don't hesitate to contact us with any questions or feedback you may have.
    </p>
</div>
    <form method="POST" action="\lms_feedback" enctype="multipart/form-data">
        @csrf
        <div class="my-5">
            <label for="name" class="form-label text-dark fw-bold">Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="my-5">
            <label for="email" class="form-label text-dark fw-bold">Email</label>
            <input type="text" class="form-control" name="email" required>
        </div>
        <div class="my-5">
            <label for="telephone_no" class="form-label text-dark fw-bold">Telephone number</label>
            <input type="text" class="form-control" name="telephone_no" required>
        </div>
        <div class="my-5">
            <label for="feedback_type" class="form-label text-dark fw-bold">Reason for feedback/inquiry</label>
            <select name="feedback_type" class="form-control">
                <option value="Website issues">Website issues</option>
                <option value="Content issues">Content issues</option>
                <option value="Service-related issues">Service-related issues</option>
                <option value="Payment issues">Payment issues</option>
                <option value="Help ticket">Help ticket</option>
                <option value="Feedback">Feedback</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="my-5">
            <textarea class="form-control" placeholder="Type your feedback/inquiry here..." name="feedback" required></textarea>
            <!-- <label for="feedback">Type your feedback/inquiry here...</label> -->
        </div>
        
        <div class="d-grid col-2 mx-auto">
            <button type="submit" class="btn btn-outline-primary btn-md mt-3">Submit</button>
        </div>
    </form>
</div>

@if (session('status') == 'success')
<div class="alert alert-success" role="alert">
    Feedback sent successfully
</div>

@elseif (session('status') == 'error')
<div class="alert alert-alert" role="alert">
    Error
</div>
@endif


@endsection
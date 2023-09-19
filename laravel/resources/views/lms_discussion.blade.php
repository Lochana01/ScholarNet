@extends('layouts.lms_template')

@section('content')


<div class="container mb-5 mt-5">
<h1>Discussion</h1>

    <form method="POST" action="\lms_discussion" enctype="multipart/form-data">
        @csrf
        <div class="my-5">
            <label for="discussion_title" class="form-label text-dark fw-bold">Title</label>
            <input type="text" class="form-control" name="discussion_title" required>
        </div>
        <div class="my-5">
            <label for="discussion_content" class="form-label text-dark fw-bold">Content</label>
            <textarea class="form-control" placeholder="Type here..." name="discussion_content" required></textarea>
            
        </div>
        
        <div class="d-grid col-2 mx-auto">
            <button type="submit" class="btn btn-outline-primary btn-md mt-3">Submit</button>
        </div>
    </form>
</div>

@if (session('status') == 'success')
<div class="alert alert-success" role="alert">
    Discussion submitted successfully
</div>

@elseif (session('status') == 'error')
<div class="alert alert-alert" role="alert">
    Error
</div>
@endif


@endsection
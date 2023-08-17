@extends('layouts.admin_dashboard_template')

@section('content')

<h1>Create Course</h1>

<div class="container mb-5 mt-5">
    <form method="POST" action="\admin_create_course" enctype="multipart/form-data">
        @csrf
        <div class="my-5">
            <label for="course_title" class="form-label text-dark fw-bold">Course title</label>
            <input type="text" class="form-control" name="course_title" required>
        </div>
        <div class="my-5">
            <label for="course_description" class="form-label text-dark fw-bold">Course description</label>
            <input type="text" class="form-control" name="course_description" required>
        </div>
        <div class="my-5">
            <label for="course_price" class="form-label text-dark fw-bold">Price (LKR)</label>
            <input type="text" class="form-control" name="course_price" required>
        </div>
        
        <div class="d-grid col-2 mx-auto">
            <button type="submit" class="btn btn-outline-primary btn-md mt-3">Create new course</button>
        </div>
    </form>
</div>

@if (session('status') == 'success')
<div class="alert alert-success" role="alert">
    New course created successfully
</div>

@elseif (session('status') == 'error')
<div class="alert alert-alert" role="alert">
    Error
</div>
@endif


@endsection
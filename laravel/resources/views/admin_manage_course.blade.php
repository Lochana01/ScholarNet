@extends('layouts.admin_dashboard_template')

@section('content')

<h1>Manage course</h1>

<div class="row my-4">
    @foreach ($course as $course)
    @if ($course->course_status)
    <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Course ID: <span style="font-weight: lighter;">{{ $course->id }}</span></h5>
                <h5 class="card-title">Course title: <span style="font-weight: lighter;">{{ $course->course_title }}</span></h5>
                <h5 class="card-title">Course description: <span style="font-weight: lighter;">{{ $course->course_description }}</span></h5>
                <h5 class="card-title">Course price: <span style="font-weight: lighter;">{{ $course->course_price }}</span></h5>
            </div>
            <a href="/admin_edit_course/{{ $course->id }}" class="btn btn-primary mb-4 mx-5">Edit</a>
            <a href="{{ route('deactivate_course', ['id' => $course->id]) }}" class="btn btn-primary mb-4 mx-5">Delete</a>
        </div>
    </div>
    @endif
    @endforeach
</div>


@if (session('status') == 'success')
<div class="alert alert-success" role="alert">
    Course deleted successfully
</div>

@elseif (session('status') == 'error')
<div class="alert alert-alert" role="alert">
    Error
</div>
@endif

@if (session('status') == 'success')
<div class="alert alert-success" role="alert">
    Course details edited successfully
</div>

@elseif (session('status') == 'error')
<div class="alert alert-alert" role="alert">
    Error
</div>
@endif


@endsection
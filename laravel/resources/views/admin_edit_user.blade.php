@extends('layouts.admin_dashboard_template')

@section('content')

<h1>Edit user account</h1>

<div class="container mb-5 mt-5">
    <form method="POST" action="{{ route('admin_delete_user', ['user' => $user->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="my-5">
            <label for="name" class="form-label text-dark fw-bold">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
        </div>

        <div class="my-5">
            <label for="dob" class="form-label text-dark fw-bold">Date of birth</label>
            <input type="date" class="form-control" name="dob" value="{{ $user->dob }}" required>
        </div>

        <div class="my-5">
            <label for="address" class="form-label text-dark fw-bold">Address</label>
            <input type="text" class="form-control" name="address" value="{{ $user->address }}" required>
        </div>

        <div class="my-5">
            <label for="telephone_no" class="form-label text-dark fw-bold">Telephone number</label>
            <input type="text" class="form-control" name="telephone_no" value="{{ $user->telephone_no }}" required>
        </div>

        <div class="my-5">
            <label for="email" class="form-label text-dark fw-bold">Email address</label>
            <input type="text" class="form-control" name="email" value="{{ $user->email }}" required>
        </div>

        <div class="my-5">
            <label for="user_type" class="form-label text-dark fw-bold">User type</label>
            <select name="user_type" id="user_type" class="form-control">
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>
            </select>
            <!-- <input type="text" class="form-control" name="user_type" value="{{ $user->user_type }}" required> -->
        </div>

        <div class="my-5">
            <label for="course_id" class="form-label text-dark fw-bold">Courses</label>
            <select name="course_id[]" id="course_id" class="form-control" multiple size="5" multiple required>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->course_title }}</option>
                @endforeach
            </select>
        </div>

        <div class="my-5">
            <label for="batch_code" class="form-label text-dark fw-bold">Batch code</label>
            <input type="text" class="form-control" name="batch_code" value="{{ $user->batch_code }}" required>
        </div>

        <div class="my-5">
            <label for="password" class="form-label text-dark fw-bold">Password</label>
            <input type="text" class="form-control" name="password" value="{{ $user->password }}" required>
        </div>
        
        
        <div class="d-grid col-2 mx-auto">
            <button type="submit" class="btn btn-outline-primary btn-md mt-3">Save changes</button>
        </div>
    </form>
</div>

@if (session('status') == 'success')
<div class="alert alert-success" role="alert">
    User account details edited successfully
</div>

@elseif (session('status') == 'error')
<div class="alert alert-alert" role="alert">
    Error
</div>
@endif


@endsection
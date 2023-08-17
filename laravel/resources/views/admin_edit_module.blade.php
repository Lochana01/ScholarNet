@extends('layouts.admin_dashboard_template')

@section('content')

<h1>Edit module details</h1>

<div class="container mb-5 mt-5">
    <form method="POST" action="{{ route('admin_manage_modules', ['module' => $module->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="my-5">
            <label for="module_title" class="form-label text-dark fw-bold">Module title</label>
            <input type="text" class="form-control" name="module_title" value="{{ $module->module_title }}" required>
        </div>
        <div class="my-5">
            <label for="course_id" class="form-label text-dark fw-bold">Course ID</label>
            <input type="text" class="form-control" name="course_id" value="{{ $module->course_id }}" required>
        </div>
        <div class="my-5">
            <label for="module_description" class="form-label text-dark fw-bold">Module description</label>
            <input type="text" class="form-control" name="module_description" value="{{ $module->module_description }}" required>
        </div>
        <div class="my-5">
            <label for="module_duration" class="form-label text-dark fw-bold">Module duration (hrs)</label>
            <input type="text" class="form-control" name="module_duration" value="{{ $module->module_duration }}" required>
        </div>
        <div class="my-5">
            <label for="module_prerequisites" class="form-label text-dark fw-bold">Module prerequisites</label>
            <input type="text" class="form-control" name="module_prerequisites" value="{{ $module->module_prerequisites }}" required>
        </div>
        <div class="my-5">
            <label for="module_credits" class="form-label text-dark fw-bold">Module credits</label>
            <input type="text" class="form-control" name="module_credits" value="{{ $module->module_credits }}" required>
        </div>
        
        <div class="d-grid col-2 mx-auto">
            <button type="submit" class="btn btn-outline-primary btn-md mt-3">Save changes</button>
        </div>
    </form>
</div>

@if (session('status') == 'success')
<div class="alert alert-success" role="alert">
    Module details edited successfully
</div>

@elseif (session('status') == 'error')
<div class="alert alert-alert" role="alert">
    Error
</div>
@endif


@endsection
@extends('layouts.lms_template')

@section('content')



<div class="container my-5">
    <h1>Upload file</h1>
    <form method="POST" action="\file_upload_lms" enctype="multipart/form-data">
        @csrf
        <div class="my-5">
            <label for="week_title" class="form-label text-dark fw-bold">Week title</label>
            <select name="week_title" id="week_title" class="form-control">
                <option value="Week one">Week one</option>
                <option value="Week two">Week two</option>
                <option value="Week three">Week three</option>
                <option value="Week four">Week four</option>
                <option value="Week five">Week five</option>
                <option value="Week six">Week six</option>
                <option value="Week seven">Week seven</option>
                <option value="Week eight">Week eight</option>
                <option value="Week nine">Week nine</option>
                <option value="Week ten">Week ten</option>
                <option value="Week eleven">Week eleven</option>
                <option value="Week twelve">Week twelve</option>
            </select>
        </div>
        <div class="my-5">
            <label for="module_id" class="form-label text-dark fw-bold">Module</label>
            <select name="module_id" id="module_id" class="form-control">
                @foreach ($modules as $module)
                    <option value="{{ $module->id }}">{{ $module->module_title }}</option>
                @endforeach
            </select>
        </div>

        <div class="my-5">
            <label for="file_name" class="form-label text-dark fw-bold">File name</label>
            <input type="text" class="form-control" name="file_name" required>
        </div>
        <div class="my-5">
            <label for="file_description" class="form-label text-dark fw-bold">File description</label>
            <input type="text" class="form-control" name="file_description" required>
        </div>
        <div class="my-5">
            <label for="file_path" class="form-label text-dark fw-bold">Upload file</label>
            <input type="file" class="form-control" name="file_path" required>
        </div>
        
        <div class="d-grid col-2 mx-auto">
            <button type="submit" class="btn btn-outline-primary btn-md mt-3">Upload file</button>
        </div>
    </form>
</div>



@endsection
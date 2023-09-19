@extends('layouts.lms_template')

@section('content')

<div class="container-fluid my-5">
    <h1 class="my-5">{{ $module->module_title }}</h1>

    @php
        $currentWeek = null;
    @endphp

    @foreach ($files as $fileItem)
        @if ($currentWeek !== $fileItem->week_title)
            @if ($currentWeek !== null)
                </div>
            @endif

            <div class="card my-5">
                <div class="card-header fw-bold fs-3">
                    {{ $fileItem->week_title }}
                </div>
                <div class="card-body">
        @endif

        <p><strong>File Name:</strong> {{ $fileItem->file_name }}</p>
        <p><strong>Description:</strong> {{ $fileItem->file_description }}</p>
        <p><strong>Uploaded at:</strong> {{ $fileItem->created_at }}</p>
        <div class="mb-5">
            <a href="{{ asset('storage/' . $fileItem->file_path) }}" download>Download</a>
        </div>

        @php
            $currentWeek = $fileItem->week_title;
        @endphp

    @endforeach

    @if ($currentWeek !== null)
        </div>
    @endif


    
</div>

<div class="d-flex justify-content-end mb-4">
    @if (auth()->user()->user_type === 'teacher')
        <a href="/file_upload_lms" class="btn btn-primary" role="button">Upload files</a>
    @endif
</div>



@if (session('status') == 'success')
<div class="alert alert-success" role="alert">
    File uploaded successfully
</div>

@elseif (session('status') == 'error')
<div class="alert alert-alert" role="alert">
    Error
</div>
@endif

@endsection

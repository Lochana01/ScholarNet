@extends('layouts.admin_dashboard_template')

@section('content')

<h1>Manage module</h1>

<div class="row my-4">
    @foreach ($module as $module)
    @if ($module->module_status)
    <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Module ID: <span style="font-weight: lighter;">{{ $module->id }}</span></h5>
                <h5 class="card-title">Module title: <span style="font-weight: lighter;">{{ $module->module_title }}</span></h5>
                <h5 class="card-title">Module description: <span style="font-weight: lighter;">{{ $module->module_description }}</span></h5>
                <h5 class="card-title">Module duration (hrs): <span style="font-weight: lighter;">{{ $module->module_duration }}</span></h5>
                <h5 class="card-title">Module credits: <span style="font-weight: lighter;">{{ $module->module_credits }}</span></h5>
                <h5 class="card-title">Module prerequisites: <span style="font-weight: lighter;">{{ $module->module_prerequisites }}</span></h5>
            </div>
            <a href="/admin_edit_module/{{ $module->id }}" class="btn btn-primary mb-4 mx-5">Edit</a>
            <a href="{{ route('deactivate_module', ['id' => $module->id]) }}" class="btn btn-primary mb-4 mx-5">Delete</a>
        </div>
    </div>
    @endif
    @endforeach
</div>


@if (session('status') == 'success')
<div class="alert alert-success" role="alert">
    Module deleted successfully
</div>

@elseif (session('status') == 'error')
<div class="alert alert-alert" role="alert">
    Error
</div>
@endif

@if (session('status') == 'edit_success')
<div class="alert alert-success" role="alert">
    Module details edited successfully
</div>

@elseif (session('status') == 'error')
<div class="alert alert-alert" role="alert">
    Error
</div>
@endif


@endsection
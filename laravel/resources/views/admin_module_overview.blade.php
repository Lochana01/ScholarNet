@extends('layouts.admin_dashboard_template')

@section('content')

<h1>Module Overview</h1>

<table class="table">
    <thead>
        <tr>
            <th>Module ID</th>
            <th>Module title</th>
            <th>Module description</th>
            <th>Module duration</th>
            <th>Module credits</th>
            <th>Module prerequisites</th>
            <th>Module status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($module as $module)
        <tr>
            <td>{{ $module->id }}</td>
            <td>{{ $module->module_title }}</td>
            <td>{{ $module->module_description }}</td>
            <td>{{ $module->module_duration }}</td>
            <td>{{ $module->module_credits }}</td>
            <td>{{ $module->module_prerequisites }}</td>
            <td>{{ $module->module_status ? 'Active' : 'Deactivated'}}</td>
        @endforeach
    </tbody>
</table>

@endsection
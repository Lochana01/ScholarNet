@extends('layouts.admin_dashboard_template')

@section('content')

<h1>Courses Overview</h1>

<table class="table">
    <thead>
        <tr>
            <th>Course ID</th>
            <th>Course title</th>
            <th>Course description</th>
            <th>Price (LKR)</th>
            <th>Course status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($course as $course)
        <tr>
            <td>{{ $course->id }}</td>
            <td>{{ $course->course_title }}</td>
            <td>{{ $course->course_description }}</td>
            <td>{{ $course->course_price }}</td>
            <td>{{ $course->course_status ? 'Active' : 'Deactivated'}}</td>
        @endforeach
    </tbody>
</table>

@endsection
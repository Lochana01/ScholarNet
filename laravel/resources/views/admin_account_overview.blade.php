@extends('layouts.admin_dashboard_template')

@section('content')

<h1>User Account Overview</h1>

<table class="table">
    <thead>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            
            <th>User Type</th>
            <th>Date of Birth</th>
            <th>Address</th>
            <th>Telephone No</th>
            <th>Account Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        @if (!$user->is_admin)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td style="text-transform: capitalize;">{{ $user->user_type }}</td>
            <td>{{ $user->dob }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->telephone_no }}</td>
            <td>{{ $user->account_status ? 'Active' : 'Deactivated' }}</td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>

@endsection
@extends('layouts.admin_dashboard_template')

@section('content')

<h1>Manage user account</h1>

<div class="row mt-5">
    @foreach ($users as $user)
    @if (!$user->is_admin && $user->account_status)
    <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card my-4 mx-3">
            <div class="card-body">
                <h5 class="card-title">Name: <span style="font-weight: lighter">{{ $user->name }}</span></h5>
                <h5 class="card-title">Email: <span style="font-weight: lighter">{{ $user->email }}</span></h5>
                <h5 class="card-title">User type: <span style="font-weight: lighter">{{ $user->user_type }}</span></h5>
                <h5 class="card-title">Course ID: <span style="font-weight: lighter">{{ $user->course_ID }}</span></h5>
                <h5 class="card-title">Date of birth: <span style="font-weight: lighter">{{ $user->dob }}</span></h5>
                <h5 class="card-title">Address: <span style="font-weight: lighter">{{ $user->address }}</span></h5>
                <h5 class="card-title">Telephone number: <span style="font-weight: lighter">{{ $user->telephone_no }}</span></h5>
                
            </div>
            <a href="/admin_edit_user/{{ $user->id }}" class="btn btn-primary mb-4 mx-5">Edit</a>
            <a href="{{ route('deactivate_account', ['id' => $user->id]) }}" class="btn btn-primary mb-4 mx-5">Delete</a>
        </div>
    </div>
    @endif
    @endforeach
</div>


@if (session('status') == 'success')
<div class="alert alert-success" role="alert">
    User account deleted successfully
</div>

@elseif (session('status') == 'error')
<div class="alert alert-alert" role="alert">
    Error
</div>
@endif


@endsection
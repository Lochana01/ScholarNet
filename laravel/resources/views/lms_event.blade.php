@extends('layouts.lms_template')

@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-center my-5">
        <div class="card" style="width: auto; height: 25%;">
        <img src="{{ asset('assets/lms/img/social.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Sports event</h5>
            <p class="card-text">Come join us on the 23th of June and for a fun social event.</p>
        </div>
        </div>
    </div>

    <div class="d-flex justify-content-center my-5">
        <div class="card" style="width: auto; height: 25%;">
        <img src="{{ asset('assets/lms/img/sport.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Sports event</h5>
            <p class="card-text">Come join us on the 24th of June to exprience a thrilling sports event.</p>
        </div>
        </div>
    </div>
</div>


@endsection
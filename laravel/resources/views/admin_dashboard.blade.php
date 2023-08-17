@extends('layouts.admin_dashboard_template')

@section('content')
<!-- <div id="right-sidebar" class="settings-panel">
    <i class="settings-close ti-close"></i> -->
    <!-- <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
    </li>
    </ul> -->
    <!-- <div class="tab-content" id="setting-content"> -->
    <!-- <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
        <div class="add-items d-flex px-3 mb-0">
        <form class="form w-100">
            <div class="form-group d-flex">
            <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
            <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
            </div>
        </form>
        </div>
        <div class="list-wrapper px-3">
        <ul class="d-flex flex-column-reverse todo-list">
            <li>
            <div class="form-check">
                <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Team review meeting at 3.00 PM
                </label>
            </div>
            <i class="remove ti-close"></i>
            </li>
            <li>
            <div class="form-check">
                <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Prepare for presentation
                </label>
            </div>
            <i class="remove ti-close"></i>
            </li>
            <li>
            <div class="form-check">
                <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Resolve all the low priority tickets due today
                </label>
            </div>
            <i class="remove ti-close"></i>
            </li>
            <li class="completed">
            <div class="form-check">
                <label class="form-check-label">
                <input class="checkbox" type="checkbox" checked>
                Schedule meeting for next week
                </label>
            </div>
            <i class="remove ti-close"></i>
            </li>
            <li class="completed">
            <div class="form-check">
                <label class="form-check-label">
                <input class="checkbox" type="checkbox" checked>
                Project review
                </label>
            </div>
            <i class="remove ti-close"></i>
            </li>
        </ul>
        </div>
        <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
        <div class="events pt-4 px-3">
        <div class="wrapper d-flex mb-2">
            <i class="ti-control-record text-primary me-2"></i>
            <span>Feb 11 2018</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
        <p class="text-gray mb-0">The total number of sessions</p>
        </div>
        <div class="events pt-4 px-3">
        <div class="wrapper d-flex mb-2">
            <i class="ti-control-record text-primary me-2"></i>
            <span>Feb 7 2018</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
        <p class="text-gray mb-0 ">Call Sarah Graves</p>
        </div>
    </div> -->
    
    <!-- <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
        <div class="d-flex align-items-center justify-content-between border-bottom">
        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
        </div>
        <ul class="chat-list">
        <li class="list active">
            <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
            <div class="info">
            <p>Thomas Douglas</p>
            <p>Available</p>
            </div>
            <small class="text-muted my-auto">19 min</small>
        </li>
        <li class="list">
            <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
            <div class="info">
            <div class="wrapper d-flex">
                <p>Catherine</p>
            </div>
            <p>Away</p>
            </div>
            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
            <small class="text-muted my-auto">23 min</small>
        </li>
        <li class="list">
            <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
            <div class="info">
            <p>Daniel Russell</p>
            <p>Available</p>
            </div>
            <small class="text-muted my-auto">14 min</small>
        </li>
        <li class="list">
            <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
            <div class="info">
            <p>James Richardson</p>
            <p>Away</p>
            </div>
            <small class="text-muted my-auto">2 min</small>
        </li>
        <li class="list">
            <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
            <div class="info">
            <p>Madeline Kennedy</p>
            <p>Available</p>
            </div>
            <small class="text-muted my-auto">5 min</small>
        </li>
        <li class="list">
            <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
            <div class="info">
            <p>Sarah Graves</p>
            <p>Available</p>
            </div>
            <small class="text-muted my-auto">47 min</small>
        </li>
        </ul>
    </div> -->
    
    <!-- </div> -->
<!-- </div> -->


<div class="col-sm-12">
    <div class="home-tab">
    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
        <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="false">Tab2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="false">Tab3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="false">Tab4</a>
        </li> -->
        </ul>
        <div>
        <!-- <div class="btn-wrapper">
            <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
            <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
            <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
        </div> -->
        </div>
    </div>
    <div class="tab-content tab-content-basic">
        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
        <div class="row">
            <div class="col-sm-12">
            <div class="statistics-details d-flex align-items-center justify-content-between mx-4">
                <div>
                <p class="statistics-title">No. of user accounts</p>
                <h3 class="rate-percentage">{{ $totalUsers }}</h3>
                <!-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p> -->
                </div>
 
                <div>
                <p class="statistics-title">No. of active accounts</p>
                <h3 class="rate-percentage">{{ $activeAccounts }}</h3>
                </div>

                <div>
                <p class="statistics-title">No. of deactivated accounts</p>
                <h3 class="rate-percentage">{{ $deactivatedAccounts }}</h3>
                </div>            
            </div>
            </div>
        </div> 

        <div class="row mb-4">
            <div class="col-sm-4 my-4">
                <div class="card">
                <div class="card-header fw-bold fs-5">
                    No. of courses
                </div>
                <div class="card-body">
                    {{ $course }}
                </div>
                </div>
            </div>

            <div class="col-sm-4 my-4">
                <div class="card">
                <div class="card-header fw-bold fs-5">
                    No. of available courses
                </div>
                <div class="card-body">
                    {{ $availableCourses }}
                </div>
                </div>
            </div>

            <div class="col-sm-4 my-4">
                <div class="card">
                <div class="card-header fw-bold fs-5">
                    No. of unavailable courses
                </div>
                <div class="card-body">
                    {{ $unavailableCourses }}
                </div>
                </div>
            </div>

            <div class="col-sm-4 my-4">
                <div class="card">
                <div class="card-header fw-bold fs-5">
                    No. of modules
                </div>
                <div class="card-body">
                    {{ $module }}
                </div>
                </div>
            </div>

            <div class="col-sm-4 my-4">
                <div class="card">
                <div class="card-header fw-bold fs-5">
                    No. of available modules
                </div>
                <div class="card-body">
                    {{ $availableModules }}
                </div>
                </div>
            </div>

            <div class="col-sm-4 my-4">
                <div class="card">
                <div class="card-header fw-bold fs-5">
                    No. of unavailable modules
                </div>
                <div class="card-body">
                    {{ $unavailableModules }}
                </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 d-flex flex-column">
            <!-- <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-start">
                        <div>
                        <h4 class="card-title card-title-dash">Yearly Revenue</h4>
                        <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        </div>
                        <div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <h6 class="dropdown-header">Settings</h6>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                        <div class="d-sm-flex align-items-center mt-4 justify-content-between"><h2 class="me-2 fw-bold">Rs. 362, 531.00</h2><h4 class="me-2">LKR</h4><h4 class="text-success">(+1.37%)</h4></div>
                        <div class="me-3"><div id="marketing-overview-legend"></div></div>
                    </div>
                    <div class="chartjs-bar-wrapper mt-3">
                        <canvas id="marketingOverview"></canvas>
                    </div>
                    </div>
                </div>
                </div>
            </div> -->
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-start">
                        <div>
                        <h4 class="card-title card-title-dash">User Account Information</h4>
                        <!-- <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p> -->
                        </div>
                        <div class="d-block">
                            <a href="{{ url('/admin_account_overview') }}">
                            <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-search"></i>User account overview</button>
                            <a href="{{ url('/adminRegister') }}">
                            <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Create new user account</button>
                        </a>
                        </div>
                    </div>
                    <div class="table-responsive  mt-1">
                        <table class="table select-table">
                        <thead>
                            <tr>
                            <th>Name</th>
                            <th>Email address</th>
                            <th>Address</th>
                            <th>Telephone number</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            @if (!$user->is_admin && $user->account_status)
                            <tr>
                            <td>
                                <div class="d-flex ">
                                <img src="{{ asset('assets/dashboard/images/user.png') }}" alt="">
                                <div>
                                    <h6>{{ $user->name }}</h6>
                                    
                                </div>
                                </div>
                            </td>
                            <td>
                                <h6>{{ $user->email }}</h6>
                                
                            </td>
                            <td>
                                <h6>{{ $user->address }}</h6>
                            </td>
                            <td>
                                <h6>{{ $user->telephone_no }}</h6>
                            </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- <div class="row flex-grow">
                <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body card-rounded">
                    <h4 class="card-title  card-title-dash">Recent Events</h4>
                    <div class="list align-items-center border-bottom py-2">
                        <div class="wrapper w-100">
                        <p class="mb-2 font-weight-medium">
                            Change in Directors
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                            <i class="mdi mdi-calendar text-muted me-1"></i>
                            <p class="mb-0 text-small text-muted">Mar 14, 2023</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="list align-items-center border-bottom py-2">
                        <div class="wrapper w-100">
                        <p class="mb-2 font-weight-medium">
                            Other Events
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                            <i class="mdi mdi-calendar text-muted me-1"></i>
                            <p class="mb-0 text-small text-muted">Mar 14, 2023</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="list align-items-center border-bottom py-2">
                        <div class="wrapper w-100">
                        <p class="mb-2 font-weight-medium">
                            Quarterly Report
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                            <i class="mdi mdi-calendar text-muted me-1"></i>
                            <p class="mb-0 text-small text-muted">Mar 14, 2023</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="list align-items-center border-bottom py-2">
                        <div class="wrapper w-100">
                        <p class="mb-2 font-weight-medium">
                            Change in Directors
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                            <i class="mdi mdi-calendar text-muted me-1"></i>
                            <p class="mb-0 text-small text-muted">Mar 14, 2023</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="list align-items-center pt-3">
                        <div class="wrapper w-100">
                        <p class="mb-0">
                            <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h4 class="card-title card-title-dash">Activities</h4>
                        <p class="mb-0">20 finished, 5 remaining</p>
                    </div>
                    <ul class="bullet-line-list">
                        <li>
                        <div class="d-flex justify-content-between">
                            <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                            <p>Just now</p>
                        </div>
                        </li>
                        <li>
                        <div class="d-flex justify-content-between">
                            <div><span class="text-light-green">Oliver Noah</span> assign you a task</div>
                            <p>1h</p>
                        </div>
                        </li>
                        <li>
                        <div class="d-flex justify-content-between">
                            <div><span class="text-light-green">Jack William</span> assign you a task</div>
                            <p>1h</p>
                        </div>
                        </li>
                        <li>
                        <div class="d-flex justify-content-between">
                            <div><span class="text-light-green">Leo Lucas</span> assign you a task</div>
                            <p>1h</p>
                        </div>
                        </li>
                        <li>
                        <div class="d-flex justify-content-between">
                            <div><span class="text-light-green">Thomas Henry</span> assign you a task</div>
                            <p>1h</p>
                        </div>
                        </li>
                        <li>
                        <div class="d-flex justify-content-between">
                            <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                            <p>1h</p>
                        </div>
                        </li>
                        <li>
                        <div class="d-flex justify-content-between">
                            <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                            <p>1h</p>
                        </div>
                        </li>
                    </ul>
                    <div class="list align-items-center pt-3">
                        <div class="wrapper w-100">
                        <p class="mb-0">
                            <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div> -->
            </div>
            <div class="col-lg-4 d-flex flex-column">
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title card-title-dash">Todo list</h4>
                            <div class="add-items d-flex mb-0">
                            <!-- <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button> -->
                            </div>
                        </div>
                        <div class="list-wrapper">
                            <ul class="todo-list todo-list-rounded">
                            <li class="d-block">
                                <div class="form-check w-100">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox"> Check mail <i class="input-helper rounded"></i>
                                </label>
                                <!-- <div class="d-flex mt-2">
                                    <div class="ps-4 text-small me-3">24 June 2023</div>
                                    <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                    <i class="mdi mdi-flag ms-2 flag-color"></i>
                                </div> -->
                                </div>
                            </li>
                            <li class="d-block">
                                <div class="form-check w-100">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox"> Respond to feedback <i class="input-helper rounded"></i>
                                </label>
                                </div>
                            </li>
                            <li class="d-block">
                                <div class="form-check w-100">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox"> Create new user accounts <i class="input-helper rounded"></i>
                                </label>
                                </div>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="card-title card-title-dash">Type By Amount</h4>
                        </div>
                        <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                        <div id="doughnut-chart-legend" class="mt-5 text-center"></div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div> -->
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                            <h4 class="card-title card-title-dash">Teacher Leave Report</h4>
                            </div>
                            <div>
                            <!-- <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Month Wise </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <h6 class="dropdown-header">week Wise</h6>
                                <a class="dropdown-item" href="#">Year Wise</a>
                                </div>
                            </div> -->
                            </div>
                        </div>
                        <div class="mt-3">
                            <canvas id="leaveReport"></canvas>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                            <h4 class="card-title card-title-dash">Top Performer</h4>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                            <div class="d-flex">
                                <img class="img-sm rounded-10" src="{{ asset('assets/dashboard/images/user.png') }}" alt="profile">
                                <div class="wrapper ms-3">
                                <p class="ms-1 mb-1 fw-bold">Brandon Washington</p>
                                
                                </div>
                            </div>
                            
                            </div>
                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                            <div class="d-flex">
                                <img class="img-sm rounded-10" src="{{ asset('assets/dashboard/images/user.png') }}" alt="profile">
                                <div class="wrapper ms-3">
                                <p class="ms-1 mb-1 fw-bold">Wayne Murphy</p>
                                
                                </div>
                            </div>
                            </div>
                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                            <div class="d-flex">
                                <img class="img-sm rounded-10" src="{{ asset('assets/dashboard/images/user.png') }}" alt="profile">
                                <div class="wrapper ms-3">
                                <p class="ms-1 mb-1 fw-bold">Katherine Butler</p>
                                </div>
                            </div>
                            </div>
                            <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                            <div class="d-flex">
                                <img class="img-sm rounded-10" src="{{ asset('assets/dashboard/images/user.png') }}" alt="profile">
                                <div class="wrapper ms-3">
                                <p class="ms-1 mb-1 fw-bold">Matthew Bailey</p>
                                
                                </div>
                            </div>
                            
                            </div>
                            <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                            <div class="d-flex">
                                <img class="img-sm rounded-10" src="{{ asset('assets/dashboard/images/user.png') }}" alt="profile">
                                <div class="wrapper ms-3">
                                <p class="ms-1 mb-1 fw-bold">Rafell John</p>
                                
                                </div>
                            </div>
                            
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div> -->
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
                <div class="card">
                <div class="card-header fw-bold fs-5">
                    Feedback/Inquires
                </div>
                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th class="px-3">Name</th>
                                <th class="px-3">Role</th>
                                <th class="px-3">Email</th>
                                <th class="px-3">Telephone number</th>
                                <th class="px-3">Feedback/Inquiry</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th class="fs-5 px-3" style="font-weight: light;">Lorem ipsum dolor sit amet.</th>
                                <th class="fs-5 px-3" style="font-weight: light;">Lorem ipsum dolor sit amet.</th>
                                <th class="fs-5 px-3" style="font-weight: light;">Lorem ipsum dolor sit amet.</th>
                                <th class="fs-5 px-3" style="font-weight: light;">Lorem ipsum dolor sit amet.</th>
                                <th class="fs-5 px-3" style="font-weight: light;">Lorem ipsum dolor sit amet.</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
        </div>
    </div>
</div>


@endsection
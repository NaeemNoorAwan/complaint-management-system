@extends('layouts.master')
@section('title', 'Dashboard | Complaint Management System')

@section('content')

<!-- Bootstrap Css -->
<link href="{{asset('css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{asset('css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

<!-- Begin page -->
<div id="layout-wrapper">
    @include('layouts.sidebar')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!-- start row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-3">
                                            <h5 class="text-primary">Welcome Back To!</h5>
                                            <p>Customer Service Representative Panel</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{asset('images/profile-img.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <img src="{{asset('images/users/avatar-1.jpg')}}" alt="" class="img-thumbnail rounded-circle">
                                        </div>
                                        <h5 class="font-size-15 text-truncate">{{ Auth::user()->name }}</h5>
                                        <p class="text-muted mb-0 text-truncate">Customer Service Representative</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        @include('layouts.footer')
    </div>
</div>
@endsection
@extends('layouts.master')
@section('title', 'Complaints | Complaint Management System Admin Panel')

@section('content')

<div id="layout-wrapper">
    @include('layouts.sidebar')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Complaints</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <!-- Start complaint Display Table -->
                                <div class="col-lg-12">
                                <div class="alert alert-info" role="alert">
                                        <b>Status:</b>  0 = Unassigned, 1 = Active, 2 = Resolved
                                    </div>
                                    <div class="table-responsive">
                                        {{$dataTable->table()}}
                                    </div>
                                </div>
                                <!-- End complaint Display Tabl -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</div>
@endsection
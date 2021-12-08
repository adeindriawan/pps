@extends('backview.master')

@section('topbar')
<x-topbar/>
@endsection

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <x-nav :role="$data['role']" />
        <div class="pcoded-content">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Basic Form Inputs</h5>
                                <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Basic Form Inputs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
            <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">

                        <!-- Page body start -->
                        <div class="page-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add User</h5>
                                        </div>
                                        <div class="card-block">
                                            <form class="form-material">
                                                <div class="form-group form-primary">
                                                    <input type="text" name="footer-email" class="form-control">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Name</label>
                                                </div>
                                                <div class="form-group form-primary">
                                                    <input type="text" name="footer-email" class="form-control">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Email</label>
                                                </div>
                                                <div class="form-group form-primary">
                                                    <input type="text" name="footer-email" class="form-control">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">Phone</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Type</label>
                                                    <div class="col-sm-10">
                                                        <select name="select" class="form-control">
                                                            <option value="">Select user type</option>
                                                            <option value="General">General</option>
                                                            <option value="Managerial">Managerial</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Unit</label>
                                                    <div class="col-sm-10">
                                                        <select name="select" class="form-control">
                                                            <option value="">Select user unit</option>
                                                            @foreach($data['units'] as $unit)
                                                              <option value="General">{{ $unit['name'] }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Role</label>
                                                    <div class="col-sm-10">
                                                        <select name="select" class="form-control">
                                                            <option value="">Select user role</option>
                                                            <option value="Lecturer">Lecturer</option>
                                                            <option value="Student">Student</option>
                                                            <option value="Administration">Administration</option>
                                                            <option value="Employee">Employee</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Residency</label>
                                                    <div class="col-sm-10">
                                                        <select name="select" class="form-control">
                                                            <option value="">Select user residency</option>
                                                            <option value="Inside">Inside campus</option>
                                                            <option value="Outside">Outside campus</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page body end -->
                    </div>
                </div>
                <!-- Main-body end -->
                <div id="styleSelector">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

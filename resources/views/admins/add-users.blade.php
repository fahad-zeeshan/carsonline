@extends('layouts.master')
@section('title' , 'Add-Users')

@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Add User</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active">Add User</li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8 col-lg-6">

                        <form action="{{route('user.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputuname">User Name</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-user"></i></div>
                                    <input type="text"  name="name" class="form-control" id="exampleInputuname">
{{--                                    <span style="color: red">@error('name'){{$message}}@enderror</span>--}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">User Email</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1">
{{--                                    <span style="color: red">@error('email'){{$message}}@enderror</span>--}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pwd1">Password</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-lock"></i></div>
                                    <input type="password"  name="password" class="form-control" id="pwd1">
{{--                                    <span style="color: red">@error('password'){{$message}}@enderror</span>--}}
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-t-30">ADD USER</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
@endsection


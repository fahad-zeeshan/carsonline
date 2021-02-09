@extends('layouts.master')
@section('title' , 'Add-Text')

@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Add Text</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Add Text</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('text.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Add Title</label>
                                <input type="text" class="form-control" name="text">
                                    @error('text')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Add Description</label>
                                <textarea class="form-control" name="description" rows="5"></textarea>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-success waves-effect
                                waves-light
                                m-t-20">SAVE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row el-element-overlay">
            <div class="col-md-12">
                <h4 class="card-title">Gallery</h4>
            </div>
              @foreach($texts as $text)
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1">
                            <div class="content-box">
                                <div class="title">
                                    <h2>CARS ONLINE HEAD</h2>
                                    <h3>{{$text->text}}</h3>
                                </div>
                                <div class="description">
                                    <p>{{$text->description}}</p>
                                </div>
                            </div>
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline" href="#" data-toggle="modal" data-target="#Modalbox-1"><i class="icon-magnifier"></i>
                                        </a></li>
                                    <li><a class="btn default btn-outline danger" href="javascript:void(0);"><i class="ti-trash"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->

        <div id="Modalbox-1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content text-box">
                    <div class="modal-header">
                        <button type="button" class="close pull-right" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                    <h2>CarsOnline</h2>
                    <h3>tortor eget felis porttitor volutpat</h3>
                    <p>Vivamus suscipit tortor eget felis porttitor volutpat. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit.</p>
                </div>
            </div>
            <!-- /.modal-content -->
            </div>
        </div>
        <!-- /.modal -->

    </div>
@endsection


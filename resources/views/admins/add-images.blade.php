@extends('layouts.master')
@section('title' , 'Add Images')

@section('content')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Add Images</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Add Images</li>
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
                        <h4 class="card-title">Upload Image</h4>
                        <form action="#" class="dropzone upload-box">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                            <div class="save-btn">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-t-30">SAVE IMAGES</button>
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
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img src="{{asset('asset/img/gallery/img1.jpg')}}" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline image-popup-vertical-fit" href=""><i class="icon-magnifier"></i></a></li>
                                    <li><a class="btn default btn-outline danger" href="javascript:void(0);"><i class="ti-trash"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <small>Image title will come here</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="{{asset('asset/img/gallery/img2.jpg')}}" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline image-popup-vertical-fit" href="img/gallery/img2.jpg"><i class="icon-magnifier"></i></a></li>
                                    <li><a class="btn default btn-outline danger" href="javascript:void(0);"><i class="ti-trash"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <small>Image title will come here</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="img/gallery/img3.jpg" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline image-popup-vertical-fit" href="img/gallery/img3.jpg"><i class="icon-magnifier"></i></a></li>
                                    <li><a class="btn default btn-outline danger" href="javascript:void(0);"><i class="ti-trash"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <small>Image title will come here</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="img/gallery/img4.jpg" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline image-popup-vertical-fit" href="img/gallery/img4.jpg"><i class="icon-magnifier"></i></a></li>
                                    <li><a class="btn default btn-outline danger" href="javascript:void(0);"><i class="ti-trash"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <small>Image title will come here</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="img/gallery/img3.jpg" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline image-popup-vertical-fit" href="img/gallery/img3.jpg"><i class="icon-magnifier"></i></a></li>
                                    <li><a class="btn default btn-outline danger" href="javascript:void(0);"><i class="ti-trash"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <small>Image title will come here</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="img/gallery/img5.jpg" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline image-popup-vertical-fit" href="img/gallery/img5.jpg"><i class="icon-magnifier"></i></a></li>
                                    <li><a class="btn default btn-outline danger" href="javascript:void(0);"><i class="ti-trash"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <small>Image title will come here</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="img/gallery/img6.jpg" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline image-popup-vertical-fit" href="img/gallery/img6.jpg"><i class="icon-magnifier"></i></a></li>
                                    <li><a class="btn default btn-outline danger" href="javascript:void(0);"><i class="ti-trash"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <small>Image title will come here</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="img/gallery/img1.jpg" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline image-popup-vertical-fit" href="img/gallery/img1.jpg"><i class="icon-magnifier"></i></a></li>
                                    <li><a class="btn default btn-outline danger" href="javascript:void(0);"><i class="ti-trash"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <small>Image title will come here</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    @endsection


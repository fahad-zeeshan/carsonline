@extends('layouts.master')
@section('title' , 'view-all-adds')

@section('content')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">View All Ads</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Ads</li>
                <li class="breadcrumb-item active">View All Ads</li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row el-element-overlay">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img src="{{asset('asset/img/templates/temp-01.png')}}" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline"  href="#" data-toggle="modal" data-target="#video-modal"><i class="icon-control-play"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h3>User 1</h3>
                            <div class="action-buttons">
                                <a class="btn btn-sm waves-effect waves-light btn-info m-r-10" href="#">EDIT</a>
                                <a class="btn btn-sm waves-effect waves-light btn-danger" href="#">DELETE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img src="{{asset('asset/img/templates/temp-02.png')}}" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline"  href="#" data-toggle="modal" data-target="#markting-modal"><i class="icon-control-play"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h3>User 1</h3>
                            <div class="action-buttons">
                                <a class="btn btn-sm waves-effect waves-light btn-info m-r-10" href="#">EDIT</a>
                                <a class="btn btn-sm waves-effect waves-light btn-danger" href="#">DELETE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img src="img/templates/temp-03.png" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline"  href="#" data-toggle="modal" data-target="#modalthree"><i class="icon-control-play"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h3>User 1</h3>
                            <div class="action-buttons">
                                <a class="btn btn-sm waves-effect waves-light btn-info m-r-10" href="#">EDIT</a>
                                <a class="btn btn-sm waves-effect waves-light btn-danger" href="#">DELETE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img src="img/templates/temp-04.png" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline"  href="#" data-toggle="modal" data-target="#modalfour"><i class="icon-control-play"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h3>User 1</h3>
                            <div class="action-buttons">
                                <a class="btn btn-sm waves-effect waves-light btn-info m-r-10" href="#">EDIT</a>
                                <a class="btn btn-sm waves-effect waves-light btn-danger" href="#">DELETE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img src="img/templates/temp-05.png" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline"  href="#" data-toggle="modal" data-target="#modalfive"><i class="icon-control-play"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h3>User 1</h3>
                            <div class="action-buttons">
                                <a class="btn btn-sm waves-effect waves-light btn-info m-r-10" href="#">EDIT</a>
                                <a class="btn btn-sm waves-effect waves-light btn-danger" href="#">DELETE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img src="img/templates/temp-02.png" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline"  href="#" data-toggle="modal" data-target="#markting-modal"><i class="icon-control-play"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h3>User 1</h3>
                            <div class="action-buttons">
                                <a class="btn btn-sm waves-effect waves-light btn-info m-r-10" href="#">EDIT</a>
                                <a class="btn btn-sm waves-effect waves-light btn-danger" href="#">DELETE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img src="img/templates/temp-03.png" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline"  href="#" data-toggle="modal" data-target="#modalthree"><i class="icon-control-play"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h3>User 1</h3>
                            <div class="action-buttons">
                                <a class="btn btn-sm waves-effect waves-light btn-info m-r-10" href="#">EDIT</a>
                                <a class="btn btn-sm waves-effect waves-light btn-danger" href="#">DELETE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"><img src="img/templates/temp-01.png" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline"  href="#" data-toggle="modal" data-target="#video-modal"><i class="icon-control-play"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h3>User 1</h3>
                            <div class="action-buttons">
                                <a class="btn btn-sm waves-effect waves-light btn-info m-r-10" href="#">EDIT</a>
                                <a class="btn btn-sm waves-effect waves-light btn-danger" href="#">DELETE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- video modal -->
        <div class="modal fade modalone" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-contentarea">
                            <button class="nxtbtn"><i class="ti-arrow-right"></i></button>
                            <div class="row paddingzero">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                    <div class="row">
                                        <div class="modalcontent-box">
                                            <div class="titel">
                                            </div>
                                            <div class="text-box">
                                                <h3>BRAND NAME AND HEADING<span>OVER HERE</span></h3>
                                                <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Cras ultricies ligula sed magna dictum porta.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                                    <div class="row">
                                        <div class="video-box">
                                            <figure>
                                                <img src="img/video-img.jpg" alt="image description">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- marketing modal -->
        <div class="modal fade modaltwo" id="markting-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-contentarea">
                            <div class="row paddingzero">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="row">
                                        <div class="img-box">
                                            <figure>
                                                <img src="img/popup-img1.jpg" alt="image description">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="row">
                                        <div class="modalcontent-box">
                                            <div class="modalcontent-boxholder">
                                                <div class="text-box">
                                                    <h2>MAIN HEADING HERE</h2>
                                                    <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                                    <figure class="modal-logo"><img src="img/carsonline-logo.png" alt="image description"></figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- marketing modal -->
        <div class="modal fade modalthree" id="modalthree" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-contentarea">
                            <div class="tg-modalbox">
                                <div class="modalcontent-box">
                                    <strong class="tg-logo">
                                        <img src="img/carsonline-logo.png" alt="image description">
                                    </strong>
                                    <div class="text-box">
                                        <h3>LOREM $500 DE UTENIUM DOLROE FONTIO</h3>
                                        <div class="description">
                                            <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convlis quis ac lectus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="modal fade modalone modalfour" id="modalfour" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="modal-contentarea">
                        <button class="nxtbtn"><i class="ti-arrow-right"></i></button>
                        <div class="row paddingzero">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                                <div class="row">
                                    <div class="modalcontent-box">
                                        <div class="titel">
                                        </div>
                                        <div class="text-box">
                                            <h3>BRAND NAME AND HEADING<span>OVER HERE</span></h3>
                                            <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Cras ultricies ligula sed magna dictum porta.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                                <div class="row">
                                    <div class="video-box">
                                        <figure>
                                            <img src="img/video-img.jpg" alt="image description">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="modal fade modalone modalfive" id="modalfive" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="modal-contentarea">
                        <strong class="reprise-logo">
                            <img src="img/carsonline-logo.png" alt="image description">
                        </strong>
                        <div class="modalcontent-box">
                            <div class="text-box">
                                <p>Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit.</p>
                            </div>
                        </div>
                        <div class="footer-text">
                            <h2>REPRISE POUR LES VOITURES EN STOCK</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @endsection


@extends('layouts.master')
@section('title' , 'Create Ad')

@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Create Ad</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">Ads</li>
                <li class="breadcrumb-item active">Create Ad</li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <form>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Select Template</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slider-box">
                                        <div class="template-area">
                                            <div class="img-checkbox">
                                                <input type="checkbox" id="temp-img-1" class="check-with-label" />
                                                <label for="temp-img-1" class="label-for-check">
                                                    <img class="image-select" src="{{asset('asset/img/templates/temp-01.png')}}" />
                                                </label>
                                            </div>
                                            <div class="ss-title">Template - 1</div>
                                        </div>
                                        <div class="template-area">
                                            <div class="img-checkbox">
                                                <input type="checkbox" id="temp-img-2" class="check-with-label" />
                                                <label for="temp-img-2" class="label-for-check">
                                                    <img class="image-select" src="{{asset('asset/img/templates/temp-02.png')}}" />
                                                </label>
                                            </div>
                                            <div class="ss-title">Template - 2</div>
                                        </div>
                                        <div class="template-area">
                                            <div class="img-checkbox">
                                                <input type="checkbox" id="temp-img-3" class="check-with-label" />
                                                <label for="temp-img-3" class="label-for-check">
                                                    <img class="image-select" src="{{asset('asset/img/templates/temp-03.png')}}" />
                                                </label>
                                            </div>
                                            <div class="ss-title">Template - 3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Select Text</h4>
                            <div class="row">
                                <div class="col-sm-8 col-lg-6">
                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="Category 1">Title 1: Lorem Ipsum Dolor</option>
                                        <option value="Category 2">Title 2: Tortor eget felis</option>
                                        <option value="Category 3">Title 3: Vivamus suscipit</option>
                                        <option value="Category 4">Title 4: Curabitur aliquet</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Select Image</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slider-box">
                                        <div class="ss-slider">
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-1" class="check-with-label" />
                                                    <label for="check-img-1" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img1.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-1 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-2" class="check-with-label" />
                                                    <label for="check-img-2" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img2.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-2 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-3" class="check-with-label" />
                                                    <label for="check-img-3" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img3.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-3 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-4" class="check-with-label" />
                                                    <label for="check-img-4" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img4.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-4 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-5" class="check-with-label" />
                                                    <label for="check-img-5" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img5.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-5 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-6" class="check-with-label" />
                                                    <label for="check-img-6" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img6.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-6 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-7" class="check-with-label" />
                                                    <label for="check-img-7" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img7.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-7 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-8" class="check-with-label" />
                                                    <label for="check-img-8" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img8.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-8 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-9" class="check-with-label" />
                                                    <label for="check-img-9" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img9.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-9 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-10" class="check-with-label" />
                                                    <label for="check-img-10" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img0.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-10 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-11" class="check-with-label" />
                                                    <label for="check-img-11" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img1.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-11 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-12" class="check-with-label" />
                                                    <label for="check-img-12" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img2.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-12 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-13" class="check-with-label" />
                                                    <label for="check-img-13" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img3.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-13 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-14" class="check-with-label" />
                                                    <label for="check-img-14" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img4.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-14 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-15" class="check-with-label" />
                                                    <label for="check-img-15" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img5.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-15 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-16" class="check-with-label" />
                                                    <label for="check-img-16" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img6.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-16 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-17" class="check-with-label" />
                                                    <label for="check-img-17" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img7.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-17 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-18" class="check-with-label" />
                                                    <label for="check-img-18" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img8.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-18 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-19" class="check-with-label" />
                                                    <label for="check-img-19" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img9.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-19 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-img-20" class="check-with-label" />
                                                    <label for="check-img-20" class="label-for-check">
                                                        <img class="image-select" src="{{asset('asset/img/gallery/img0.jpg')}}" />
                                                    </label>
                                                </div>
                                                <div class="ss-title">Image-20 title will come here</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Select Video</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slider-box">
                                        <div class="ss-slider">
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-1" class="check-with-label" />
                                                    <label for="check-vid-1" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-1 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-2" class="check-with-label" />
                                                    <label for="check-vid-2" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-2 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-3" class="check-with-label" />
                                                    <label for="check-vid-3" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-3 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-4" class="check-with-label" />
                                                    <label for="check-vid-4" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-4 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-5" class="check-with-label" />
                                                    <label for="check-vid-5" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-5 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-6" class="check-with-label" />
                                                    <label for="check-vid-6" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-6 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-7" class="check-with-label" />
                                                    <label for="check-vid-7" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-7 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-8" class="check-with-label" />
                                                    <label for="check-vid-8" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-8 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-9" class="check-with-label" />
                                                    <label for="check-vid-9" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-9 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-10" class="check-with-label" />
                                                    <label for="check-vid-10" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-10 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-11" class="check-with-label" />
                                                    <label for="check-vid-11" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-11 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-12" class="check-with-label" />
                                                    <label for="check-vid-12" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-12 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-13" class="check-with-label" />
                                                    <label for="check-vid-13" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-13 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-14" class="check-with-label" />
                                                    <label for="check-vid-14" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-14 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-15" class="check-with-label" />
                                                    <label for="check-vid-15" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-15 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-16" class="check-with-label" />
                                                    <label for="check-vid-16" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-16 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-17" class="check-with-label" />
                                                    <label for="check-vid-17" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-17 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-18" class="check-with-label" />
                                                    <label for="check-vid-18" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-18 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-19" class="check-with-label" />
                                                    <label for="check-vid-19" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-19 title will come here</div>
                                            </div>
                                            <div>
                                                <div class="img-checkbox">
                                                    <input type="checkbox" id="check-vid-20" class="check-with-label" />
                                                    <label for="check-vid-20" class="label-for-check">
                                                        <video class="image-select"><source src= '{{ url('asset/videos/mov_bbb.mp4') }} ' type="video/mp4">
                                                    </label>
                                                </div>
                                                <div class="ss-title">Video-20 title will come here</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <h4 class="card-title">Select Sliding Rotation Time:</h4>
                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="Category 1">2 sec</option>
                                        <option value="Category 2">4 sec</option>
                                        <option value="Category 3">6 sec</option>
                                        <option value="Category 4">8 sec</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <h4 class="card-title">Assign User:</h4>
                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="Category 1">User 1</option>
                                        <option value="Category 2">User 2</option>
                                        <option value="Category 3">User 3</option>
                                        <option value="Category 4">User 4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pull-right">
                        <button type="submit" class="btn btn-info waves-effect waves-light m-t-20 m-r-10">Preview</button>
                        <button type="submit" class="btn btn-success waves-effect waves-light m-t-20">Create Ad</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>

@endsection
@section('script2')
    <script>
        $('.ss-slider').slick({
            rows: 2,
            slidesPerRow: 6,
            slidesToScroll: 2,
            nextArrow: '<i class="slick-next fa fa-arrow-right"></i>',
            prevArrow: '<i class="slick-prev fa fa-arrow-left"></i>',
            responsive: [
                {
                    breakpoint: 640,
                    settings: {
                        slidesPerRow: 2,
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesPerRow: 1,
                        slidesToShow: 1,
                    }
                }
            ]
        });
    </script>
@endsection


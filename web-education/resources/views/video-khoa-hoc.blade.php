@extends('layout')
@section('content')
@include('header')
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Video</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog left-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="{{ asset('assets/video/Kid - 30637_1595220239.mp4')}}" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary">
                      <div class="panel-heading">.............</div>
                      <ul class="list-group">
                        <li class="list-group-item">
                            <button type="submit" class="btn btn-info">Làm bài kiểm tra</button>
                        </li>
                        <li class="list-group-item">
                            <label>Tài liệu</label>
                            <h4>abc.pdf</h4>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <br><div class="panel panel-info">
                    <div class="panel-heading">Chương 1</div>
                        <div class="panel-body">
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ asset('assets/video/Kid - 30637_1595220239.mp4')}}" allowfullscreen></iframe>
                                </div>
                                <label for=""><a href="">Tên bài giảng abc</a></label>
                            </div>
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ asset('assets/video/Kid - 30637_1595220239.mp4')}}" allowfullscreen></iframe>
                                </div>
                                <label for=""><a href="">Tên bài giảng abc</a></label>
                            </div>
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ asset('assets/video/Kid - 30637_1595220239.mp4')}}" allowfullscreen></iframe>
                                </div>
                                <label for=""><a href="">Tên bài giảng abc</a></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <br><div class="panel panel-info">
                    <div class="panel-heading">Chương 2</div>
                        <div class="panel-body">
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ asset('assets/video/Kid - 30637_1595220239.mp4')}}" allowfullscreen></iframe>
                                </div>
                                <label for=""><a href="">Tên bài giảng abc</a></label>
                            </div>
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ asset('assets/video/Kid - 30637_1595220239.mp4')}}" allowfullscreen></iframe>
                                </div>
                                <label for=""><a href="">Tên bài giảng abc</a></label>
                            </div>
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ asset('assets/video/Kid - 30637_1595220239.mp4')}}" allowfullscreen></iframe>
                                </div>
                                <label for=""><a href="">Tên bài giảng abc</a></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <br><div class="panel panel-info">
                    <div class="panel-heading">Chương 3</div>
                        <div class="panel-body">
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ asset('assets/video/Kid - 30637_1595220239.mp4')}}" allowfullscreen></iframe>
                                </div>
                                <label for=""><a href="">Tên bài giảng abc</a></label>
                            </div>
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ asset('assets/video/Kid - 30637_1595220239.mp4')}}" allowfullscreen></iframe>
                                </div>
                                <label for=""><a href="">Tên bài giảng abc</a></label>
                            </div>
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ asset('assets/video/Kid - 30637_1595220239.mp4')}}" allowfullscreen></iframe>
                                </div>
                                <label for=""><a href="">Tên bài giảng abc</a></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    <!-- End Blog -->
@endsection

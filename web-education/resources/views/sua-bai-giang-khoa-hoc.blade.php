@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/19.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Sửa bài giảng khóa học</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> ...</a></li>
                        <li><a href="#">...</a></li>
                        <li class="active">Sửa bài giảng khóa học</li>
                    </ul>
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
                <div class="blog-items">

                    <div class="blog-content col-md-8">
                        <h3>Sửa bài giảng của khóa học</h3>
                                @if(count($errors)>0)
                                    <div class="alert alert-danger">
                                        @foreach($errors->all() as $err)
                                            {{$err}}<br>
                                        @endforeach
                                    </div>
                                @endif
                                @if(session('thongbao'))
                                    <div class="alert alert-success">
                                        {{session('thongbao')}}
                                    </div>
                                @endif
                           <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <div class="panel panel-info">
                                          <div class="panel-heading">Khóa học đang sửa</div>
                                          <div class="panel-body">{{$noidungs->Chuong->KhoaHoc->ten_khoa_hoc}}</div>
                                    </div>
                                    <div class="panel panel-info">
                                          <div class="panel-heading">Chương đang sửa</div>
                                          <div class="panel-body">{{$noidungs->Chuong->ten_chuong}}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="motakhoahoc">Tên bài giảng</label>
                                        <input type="text" class="form-control" id="motakhoahoc" name="TieuDe" value="{{$noidungs->tieu_de}}">
                                    </div>

                                    <div class="col-sm-6">
                                    <label for="">Video hiện tại</label><br>
                                    <video src="{{ asset('assets/video/'.$noidungs->video) }}" width="100" height="50">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="">Video bài giảng</label><br>
                                        <input type="file" class="form-control-file border" name="Video">
                                    </div>
                                    <!-- chưa làm xong -->
                                    <div class="col-sm-12">
                                        <label for="">Tài liệu bài giảng</label>
                                        <input type="file" class="form-control-file border" name="TaiLieu">
                                    </div>
                                <button type="submit" class="btn btn-danger">Sửa</button>
                            </form>
                            
                        </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-4">
                        <aside>
                            <div class="single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <img src="assets/img/advisor/2.jpg" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <span>Giảng viên</span>
                                        <h4>Nguyễn Văn A</h4>
                                    </div>
                                    <a href="thong-tin-giang-vien"><button type="button" class="btn btn-primary btn-lg btn-block">Thông tin giảng viên </button></a>
                                </div>
                            </div>
                            <div class="sidebar-item category">
                                <div class="title">
                                    <h4>Danh mục</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="#">Thông tin cá nhân</a>
                                        </li>
                                        <li>
                                            <a href="#">Quản trị khóa học</a>
                                        </li>
                                        <li>
                                            <a href="#">Kho tài liệu</a>
                                        </li>
                                        <li>
                                            <a href="#">Đăng xuất</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection

@section('js')

@endsection

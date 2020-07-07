@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/19.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Tạo mô tả khóa học</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> ...</a></li>
                        <li><a href="#">...</a></li>
                        <li class="active">Tạo mô tả khóa học</li>
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
                            <form>
                                <div class="form-group">
                                    <label for="tenkhoahoc">Tên khóa học</label>
                                    <input type="text" class="form-control" id="tenkhoahoc" placeholder="Thiết kế website">
                                </div>
                                <div class="form-group">
                                    <label for="motakhoahoc">Mô tả khóa học</label>
                                    <input type="text" class="form-control" id="motakhoahoc" placeholder="website">
                                </div>
                                <div class="col-sm-6">
                                    <label for="khoahoc">Ảnh khóa học</label>
                                    <input type="file" class="form-control-file" id="anhkhoahoc">
                                </div>
                                <div class="col-sm-6">
                                    <label for="linhvuc">Lĩnh vực</label>
                                    <select class="form-control" id="linhvuc">
                                    <option>Âm nhạc</option>
                                    <option>Công nghệ</option>
                                    <option>..</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="yeucaukhoahoc">Yêu cầu khóa học</label>
                                    <input type="text" class="form-control" id="yeucaukhoahoc" placeholder="laptop,máy tính,...">
                                </div>
                                <div class="form-group">
                                    <label for="motatongquat">Mô tả tổng quát</label>
                                    <textarea class="form-control" id="motatongquat" rows="3"></textarea>
                                </div>
                                <button type="button" class="btn btn-success">Lưu lại</button>
                                <button type="button" class="btn btn-danger">Làm mới</button>
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
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Thông tin giảng viên</button>
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

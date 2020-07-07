@extends('layout')
@section('content')
@include('header')
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/19.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Danh sách khóa học đã tạo</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> ...</a></li>
                        <li><a href="#">...</a></li>
                        <li class="active">Danh sách khóa học đã tạo</li>
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
                    <h3>Danh sách khóa học đã tạo</h3>
                            <div class="container-fluid adm-archivos">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center">
                                                <span><strong>Danh sách khóa học đã tạo</strong></span>
                                            </div>
                                            <table class="table table-bordered table-hover vmiddle">
                                                <thead>
                                                    <tr>
                                                        <th>Hình ảnh khóa học</th>
                                                        <th>Tên khóa học</th>
                                                        <th></th>
                                                        <th>Dung lượng</th>
                                                        <th>Ngày tạo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td ><img src="assets/img/advisor/2.jpg" class="img-thumbnail" alt="Cinque Terre" width="100" height="100"></td>
                                                        <td>Thiết kế web</td>
                                                        <td class="text-center">
                                                            <a href="#"><span class="btn btn-sm btn-danger">Xóa</span></a>
                                                            <a href="#"><span class="btn btn-sm btn-primary">Sửa</span></a>
                                                            <a href="#"><span class="btn btn-sm btn-info">Xem</span></a>
                                                        </td>
                                                        <td>5M</td>
                                                        <td>15/7/2020 09:48:2</td>
                                                    </tr>
                                                    <tr>
                                                        <td ><img src="assets/img/advisor/2.jpg" class="img-thumbnail" alt="Cinque Terre" width="100" height="100"></td>
                                                        <td>Thiết kế web</td>
                                                        <td class="text-center">
                                                            <a href="#"><span class="btn btn-sm btn-danger">Xóa</span></a>
                                                            <a href="#"><span class="btn btn-sm btn-primary">Sửa</span></a>
                                                            <a href="#"><span class="btn btn-sm btn-info">Xem</span></a>
                                                        </td>
                                                        <td>5M</td>
                                                        <td>15/7/2020 09:48:2</td>
                                                    </tr>
                                                    <tr>
                                                        <td ><img src="assets/img/advisor/2.jpg" class="img-thumbnail" alt="Cinque Terre" width="100" height="100"></td>
                                                        <td>Thiết kế web</td>
                                                        <td class="text-center">
                                                            <a href="#"><span class="btn btn-sm btn-danger">Xóa</span></a>
                                                            <a href="#"><span class="btn btn-sm btn-primary">Sửa</span></a>
                                                            <a href="#"><span class="btn btn-sm btn-info">Xem</span></a>
                                                        </td>
                                                        <td>5M</td>
                                                        <td>15/7/2020 09:48:2</td>
                                                    </tr>
                                                    <tr>
                                                        <td ><img src="assets/img/advisor/2.jpg" class="img-thumbnail" alt="Cinque Terre" width="100" height="100"></td>
                                                        <td>Thiết kế web</td>
                                                        <td class="text-center">
                                                            <a href="#"><span class="btn btn-sm btn-danger">Xóa</span></a>
                                                            <a href="#"><span class="btn btn-sm btn-primary">Sửa</span></a>
                                                            <a href="#"><span class="btn btn-sm btn-info">Xem</span></a>
                                                        </td>
                                                        <td>5M</td>
                                                        <td>15/7/2020 09:48:2</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Tạo khóa học</button>
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

@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/19.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Sửa mô tả khóa học</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> ...</a></li>
                        <li><a href="#">...</a></li>
                        <li class="active">Sửa mô tả khóa học</li>
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
                                <h3>Sửa mô tả khóa học</h3>
                            <form>
                                <div class="form-group">
                                    <label for="tenkhoahoc">Tên khóa học</label>
                                    <input type="text" class="form-control" id="tenkhoahoc" value="Thiết kế website">
                                </div>
                                <div class="form-group">
                                    <label for="motakhoahoc">Mô tả khóa học</label>
                                    <input type="text" class="form-control" id="motakhoahoc" value="website">
                                </div>
                                <div class="col-sm-6">
                                    <label for="khoahoc">Ảnh khóa học hiện tại</label>
                                    <img src="assets/img/advisor/2.jpg" class="img-thumbnail" style="width: 70px;height: 70px" alt="">
                                </div>
                                <div class="col-sm-6">
                                    <label for="khoahoc">Ảnh khóa học muốn sửa</label>
                                    <input type="file" class="form-control-file" id="anhkhoahoc">
                                </div>
                                <div class="form-group">
                                    <label for="linhvuc">Lĩnh vực</label>
                                    <select class="form-control" id="linhvuc">
                                    <option>Âm nhạc</option>
                                    <option>Công nghệ</option>
                                    <option>..</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="yeucaukhoahoc">Yêu cầu khóa học</label>
                                    <input type="text" class="form-control" id="yeucaukhoahoc" value="laptop,máy tính,...">
                                </div>
                                <div class="form-group">
                                    <label for="motatongquat">Mô tả tổng quát</label>
                                    <textarea class="form-control" id="motatongquat" rows="3"></textarea>
                                </div>
                                <button type="button" class="btn btn-danger">Sửa</button>
                            </form>
                            <br>
                            <h3>Danh sách chương</h3>
                            <table class="table table-bordered table-hover vmiddle">
                                <thead>
                                    <tr>
                                        <th>Tên khóa học</th>
                                        <th>Tên Chương</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Luyện phát âm tiếng anh</td>
                                        <td>Giới thiệu</td>
                                        <td class="text-center">
                                            <a href="#"><span class="btn btn-sm btn-danger">Xóa</span></a>
                                            <a href="#"><span class="btn btn-sm btn-primary">Sửa</span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Luyện phát âm tiếng anh</td>
                                        <td>Phát âm cơ bản</td>
                                        <td class="text-center">
                                            <a href="#"><span class="btn btn-sm btn-danger">Xóa</span></a>
                                            <a href="#"><span class="btn btn-sm btn-primary">Sửa</span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Luyện phát âm tiếng anh</td>
                                        <td>Phát âm nâng cao</td>
                                        <td class="text-center">
                                            <a href="#"><span class="btn btn-sm btn-danger">Xóa</span></a>
                                            <a href="#"><span class="btn btn-sm btn-primary">Sửa</span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Luyện phát âm tiếng anh</td>
                                        <td>Tổng kết</td>
                                        <td class="text-center">
                                            <a href="#"><span class="btn btn-sm btn-danger">Xóa</span></a>
                                            <a href="#"><span class="btn btn-sm btn-primary">Sửa</span></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
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

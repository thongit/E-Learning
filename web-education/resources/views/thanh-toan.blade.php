@extends('layout')
@section('content')
@include('header')

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url({{ asset('assets/img/banner/19.jpg);') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Thanh toán</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i>Trang Chủ</a></li>
                        <li><a href="#">Thanh toán</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Popular Courses
    ============================================= -->
    <div class="popular-courses-area weekly-top-items default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-primary">
                      <div class="panel-heading">Thông tin thanh toán</div>
                      <div class="panel-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="">Địa chỉ</label>
                          <input type="text" class="form-control" name="DiaChi" required="">
                        </div>
                        <div class="form-group">
                          <label for="">Email</label>
                          <input type="number" class="form-control" name="SoDienThoai" required="">
                        </div>
                        <div class="form-group">
                          <label for="">Số tiền</label>
                          <input type="number" class="form-control" name="SoTien" required="">
                        </div>
                        <div class="form-group">
                          <label for="">Ngân Hàng</label>
                          <input type="text" class="form-control" name="NganHang" required="">
                        </div>
                        <div class="form-group">
                          <label for="">Ghi chú</label>
                          <input type="text" class="form-control" name="GhiChu" required="">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Thanh toán
                        </button>
                        </form>
                      </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary">
                      <div class="panel-heading">Danh sách sản phẩm</div>
                      <div class="panel-body">
                        <div class="form-group">
                          <img src="https://nghiencuuquocte.org/wp-content/uploads/2019/03/science.jpg" alt="" class="thumbnail">
                        </div>
                      </div>
                      <ul class="list-group">
                        <li class="list-group-item">
                            <label>Tên khóa học: </label>
                            <h4>Khóa học abc</h4>
                        </li>
                        <li class="list-group-item">
                            <label>Giá tiền: </label>
                            <h4>150.000VND</h4>
                        </li>
                          <li class="list-group-item">
                            <label>Tổng tiền: </label>
                            <h3>150.000VND</h3>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Courses -->
@endsection

@extends('layout')
@section('content')
@include('header')
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Thanh toán</h1>
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
                <ul class="nav nav-pills">
                  <li class="active"><a data-toggle="pill" href="#a">Thanh toán khi giao hàng</a></li>
                  <li><a data-toggle="pill" href="#b">Thanh toán online</a></li>
                </ul>
                
                <div class="tab-content">
                  <div id="a" class="tab-pane fade in active">
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
                          <input type="email" class="form-control" name="SoDienThoai" required="">
                        </div>
                        <div class="form-group">
                          <label for="">Số điện thoại</label>
                          <input type="number" class="form-control" name="SoTien" required="">
                        </div>
                        <div class="form-group">
                          <label for="">Ghi chú</label>
                          <input type="text" class="form-control" name="GhiChu" required="">
                        </div>
                        <div class="vnpay-tt">
                          
                        </div>
                        <button id="thanhtoan" type="submit" class="btn btn-primary">
                            Xác nhận thanh toán
                        </button>
<!--                         <button class="btn btn-primary">
                            <a data-toggle="pill" href="#b">Thanh toán online</a>
                        </button> -->
                        </form>
                      </div>
                    </div>
                  </div>
                  <div id="b" class="tab-pane fade">
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
                          <input type="email" class="form-control" name="SoDienThoai" required="">
                        </div>
                        <div class="form-group">
                          <label for="">Số điện thoại</label>
                          <input type="number" class="form-control" name="SoTien" required="">
                        </div>
                        <div id="vnpay">
                          
                        </div>
                        <div class="form-group">
                          <label for="">Số tiền</label>
                          <input type="text" class="form-control" placeholder="199.000 VND" name="SoTien" disabled>
                        </div>

                        <div class="form-group">
                          <label for="language">Loại hàng hóa </label>
                          <select name="order_type" id="order_type" class="form-control">
                              <option value="topup">Nạp tiền điện thoại</option>
                              <option value="billpayment">Thanh toán hóa đơn</option>
                              <option value="fashion">Thời trang</option>
                              <option value="other">Khác - Xem thêm tại VNPAY</option>
                          </select>
                        </div>
                        <div class="form-group">
                        <label for="bank_code">Ngân hàng</label>
                        <select >
                            <option value="">Không chọn</option>
                            <option value="NCB"> Ngan hang NCB</option>
                            <option value="AGRIBANK"> Ngan hang Agribank</option>
                            <option value="SCB"> Ngan hang SCB</option>
                            <option value="SACOMBANK">Ngan hang SacomBank</option>
                            <option value="EXIMBANK"> Ngan hang EximBank</option>
                            <option value="MSBANK"> Ngan hang MSBANK</option>
                            <option value="NAMABANK"> Ngan hang NamABank</option>
                            <option value="VNMART"> Vi dien tu VnMart</option>
                            <option value="VIETINBANK">Ngan hang Vietinbank</option>
                            <option value="VIETCOMBANK"> Ngan hang VCB</option>
                            <option value="HDBANK">Ngan hang HDBank</option>
                            <option value="DONGABANK"> Ngan hang Dong A</option>
                            <option value="TPBANK"> Ngân hàng TPBank</option>
                            <option value="OJB"> Ngân hàng OceanBank</option>
                            <option value="BIDV"> Ngân hàng BIDV</option>
                            <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                            <option value="VPBANK"> Ngan hang VPBank</option>
                            <option value="MBBANK"> Ngan hang MBBank</option>
                            <option value="ACB"> Ngan hang ACB</option>
                            <option value="OCB"> Ngan hang OCB</option>
                            <option value="IVB"> Ngan hang IVB</option>
                            <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                        </select>
                        </div>
                        <div class="form-group">
                          <label for="">Ngôn ngữ</label>
                          <select name="NgonNgu" id="">
                            <option value="vn">Tiếng Việt</option>
                            <option value="en">English</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="">Ghi chú</label>
                          <input type="text" class="form-control" name="GhiChu" required="">
                        </div>
                        <button id="thanh_toan_vnpay" type="submit" class="btn btn-primary">
                            Xác nhận thanh toán VNPAY
                        </button>
                        </form>
                      </div>
                    </div>
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

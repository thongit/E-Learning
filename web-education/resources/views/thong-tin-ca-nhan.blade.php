@extends('layout')
<title>EDUQTTT - Thông tin cá nhân</title>
@section('content')
@include('header')
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>

<link href='https://fonts.googleapis.com/css?family=Dosis:500,700' rel='stylesheet' type='text/css'>
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
<link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('assets/js/sweet-alerts.init.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>

<!-- Sweet alert init js-->
<script src="{{ asset('assets/js/sweet-alerts.init.js') }}"></script>
<link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" /> 

<!-- Start Breadcrumb
    ============================================= -->
    <div class="container" style="font-size: large;">
        <a href="/">Trang chủ</a> &nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i> 
        <a href="{{ route('sua') }}">Thông tin cá nhân</a>
    </div>
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12" style="">
                    <h2>Thông tin cá nhân</h2>
                </div>
            </div>
        </div>
    </div>

    @if (session('thongbao'))
    <script>
        swal.fire("{{ session('thongbao') }}","","success")
    </script>
@endif
@if (session('error'))
    <script>
        swal.fire("{{ session('error') }}","","error")
    </script>
@endif
    
    <!-- End Breadcrumb -->

    <!-- Start Advisor Details
    ============================================= -->
    <div class="advisor-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="advisor-info">
                    <!-- Start Thumbnail -->
                    <div class="col-md-5">
                        <div class="thumb">
                            <img src="{{ asset('assets/images/'.$nguoidungs->anh_dai_dien) }}" alt="Thumb">
                            <div class="info">
                                <h4>{{$nguoidungs->ho_ten}}</h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Thumbnail -->

                    <!-- Start Content -->
                    <div class="col-md-7 content">
                        <div class="course-info-list">
                            <ul>
                                <li>
                                    <h4>Họ và tên</h4>
                                    <h5>{{$nguoidungs->ho_ten}}</h5>
                                </li>
                                <li>
                                    <h4>Email</h4>
                                    <h5>{{$nguoidungs->email}}</h5>
                                </li>
                                <li>
                                    <h4>Số điện thoại</h4>
                                    <h5>{{$nguoidungs->sdt}}</h5>
                                </li>
                            </ul>
                        </div>
                        <!-- Star Tab Info -->
                        <div class="tab-info">
                            <!-- Tab Nav -->
                            <ul class="nav nav-pills">
                                
                                <li class="active"  >
                                    <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                        Đổi mật khẩu
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                        Thông tin liên hệ
                                    </a>
                                </li>
                                @if(Session::get('loai_tk')==2)
                                <li>
                                    <a data-toggle="tab" href="#tab4" aria-expanded="false">
                                       Tài khoản ngân hàng
                                    </a>
                                </li>
                                @endif
                            </ul>
                            <!-- End Tab Nav -->
                            <!-- Start Tab Content -->
                            <div class="tab-content tab-content-info">
                                <!-- Single Tab -->
                                <div id="tab2" class="tab-pane fade active in">
                                  
                                <div class="login-area default-padding-mk">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                <form action="{{ route('xu-ly-doi-mat-khau-trang-ca-nhan')}}" id="login-form" method="POST" class="white-popup-block">
                    @csrf
                                                        <div class="login-custom">
                                                            <div class="heading">
                                                                <h4><i class="fas fa-edit"></i>Đổi mật khẩu</h4>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                @if(session('error'))
                                <div class="alert alert-danger">
                                    {{session('error')}}
                                </div>
                                @endif
                                                                    <div class="form-group">
                                                                        <input class="form-control" id="mat_khau_cu" name="mat_khau_cu"placeholder="Mật khẩu hiện tại*" type="password" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                    <input class="form-control" id="mat_khau" name="mat_khau" placeholder="Nhập mật khẩu mới" type="password" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                    <input class="form-control" id="xac_nhan_mat_khau" name="xac_nhan_mat_khau" placeholder="Xác nhận mật khẩu" type="password" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <button type="submit" id="xacnhan">
                                                                        Lưu mật khẩu
                                                                    </button>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                @if(Session::get('loai_tk')==2)
                                <div id="tab4" class="tab-pane fade">
                                    <div class="login-area default-padding-mk">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                <form action="{{ route('xu-ly-them-tk')}}" id="login-form" method="POST" class="white-popup-block">
                                                    @csrf
                                                        <div class="login-custom">
                                                            
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <input class="form-control" value="{{$nguoidungs->theNganHang[0]->so_tai_khoan}}" id="so_tai_khoan" name="so_tai_khoan"placeholder="Số tài khoản*" type="number" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                    <input class="form-control" id="ten_tren_the" value="{{$nguoidungs->theNganHang[0]->ten_tren_the}}" name="ten_tren_the" placeholder="Tên trên thẻ*" type="text" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                    <input class="form-control" id="ten_ngan_hang" value="{{$nguoidungs->theNganHang[0]->ten_ngan_hang}}" name="ten_ngan_hang" placeholder="Tên ngân hàng*" type="text" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                    <input class="form-control" id="chi_nhanh" value="{{$nguoidungs->theNganHang[0]->chi_nhanh}}" name="chi_nhanh" placeholder="Địa chỉ chi nhánh*" type="text" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <button type="submit" id="xacnhan">
                                                                        Cập nhật thông tin
                                                                    </button>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab3" class="tab-pane">
                                    <div class="info title">
                                         <form action="{{ route('xu-ly-sua')}}" id="register-form" method="POST" class="white-popup-block" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-3">
                                                    {{-- <div class="form-group">
                                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                                        <span class="alert-error"></span>
                                                    </div> --}}
                                                    <h4>Họ và tên</h4>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input class="form-control" id="ho_ten" name="ho_ten" value="{{$nguoidungs->ho_ten}}" placeholder="Họ và tên*" type="text" required>
                                                        <span class="alert-error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h4>Số điện thoại</h4>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                    <input class="form-control" id="so_dt" name="so_dt" value="{{$nguoidungs->sdt}}" placeholder="Số điện thoại*" type="number"  maxlength="10" required>
                                                        <span class="alert-error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h4>Địa chỉ</h4>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                    <input class="form-control" id="dia_chi" name="dia_chi" value="{{$nguoidungs->dia_chi}}" placeholder="Địa chỉ" type="text" required>
                                                        <span class="alert-error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h4>CMND</h4>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                    <input class="form-control" id="so_cmnd" name="so_cmnd" value="{{$nguoidungs->cmnd}}" placeholder="Số CMND*" type="number" maxlength="9" required>
                                                        <span class="alert-error"></span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-3">
                                                    <h4>Giới thiệu</h4>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                    <input class="form-control" id="gioi_thieu" name="gioi_thieu" value="{{$nguoidungs->gioi_thieu}}" placeholder="" type="text" required>
                                                        <span class="alert-error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                        <h4>Chọn ảnh đại diện </h4>
                                       <input type="file" class="form-control" id="anh-dai-dien" name="anh-dai-dien" aria-describedby="emailHelp" >
                                        </div>
                                        </div>
                                    </div>
                                            {{-- <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group comments">
                                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Me About Courses *"></textarea>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <button type="submit" name="submit" id="submit">
                                                        Lưu thay đổi </i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Alert Message -->
                                            <div class="col-md-12 alert-notification">
                                                <div id="message" class="alert-msg"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Single Tab -->
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Tab Info -->

                    </div>
                    <!-- End Content -->
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    <!-- End Advisor Details -->
@endsection


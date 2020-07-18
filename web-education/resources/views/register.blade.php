@extends('layout')
@section( 'content')
@include('header')
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>

<!-- Sweet alert init js-->
<script src="{{ asset('assets/js/sweet-alerts.init.js') }}"></script>
<link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" /> 
<!-- Start Login
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="{{ route('xu-ly-dang-ky')}}" id="register-form" method="POST" class="white-popup-block">
                    @csrf
                        <div class="login-custom">
                            <div class="heading">               
                                <h4><i class="fas fa-edit"></i>Đăng ký</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                                    <div class="form-group">
                                        <input class="form-control" id="ho_ten" name="ho_ten" placeholder="Họ và tên*" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                               
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="so_cmnd" name="so_cmnd" placeholder="Số CMND*" type="number" maxlength="9" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="so_dt" name="so_dt" placeholder="Số điện thoại*" type="number"  maxlength="10" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="mat_khau" name="mat_khau" placeholder="Mật khẩu*" type="password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="mat_khau_nl" name="mat_khau_nl" placeholder="Nhập lại mật khẩu*" type="password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit">
                                        Đăng ký
                                    </button>
                                </div>
                            </div>
                            <p class="link-bottom">Bạn đã có tài khoản? <a href="dang-nhap">Đăng nhập</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    <!-- End Login Area -->
   
@endsection

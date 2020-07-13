@extends('layout')
@section( 'content')
@include('header')
<!-- Start Login
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="#" id="login-form" class="white-popup-block">
                        <div class="login-custom">
                            <div class="heading">
                                <h4><i class="fas fa-edit"></i>Đăng ký</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Họ và tên*" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email*" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Mật khẩu*" type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Nhập lại mật khẩu*" type="password">
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
    <!-- End Login Area -->
@endsection

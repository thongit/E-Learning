@extends('layout')
@section( 'content')
@include('header')
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<!-- <script src="{{ asset('assets/js/sweet-alerts.init.js') }}"></script> -->
<link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" /> 

<!-- Start Login
    ============================================= -->
    @if (session('thongbao'))
    <script>
        swal.fire("{{ session('thongbao') }}","","success")
    </script>
@endif
    
    <div class="login-area default-padding">
        <div class="container">
            
                <div class="col-md-6 col-md-offset-3">
                    <form action="{{ route('xu-ly-dang-nhap')}}" id="login-form" method="POST" class="white-popup-block">
                    @csrf
                        <div class="login-custom">
                            <div class="heading">
                                <h4><i class="fas fa-sign-in-alt"></i>Đăng nhập</h4>
                            </div>
                            <div class="col-md-12">
                                
                                <div class="row">
                                @if(session('error'))
                                <div class="alert alert-danger">
                                    {{session('error')}}
                                </div>
                                @endif
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email"  required >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">

                                        <input class="form-control"  id="mat_khau" name="mat_khau" placeholder="Mật khẩu*" type="password"  required>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <a title="Lost Password" href="#" class="lost-pass-link">Quên mật khẩu</a>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit">
                                        Đăng nhập
                                    </button>
                                </div>
                            </div>
                            <p class="link-bottom">Chưa có tài khoản? <a href="dang-ky">Đăng ký</a></p>
                            <div class="login-social">
                            <!-- <h3>Đăng nhập với</h3>
                            <ul>
                                <li class="facebook">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="linkedin">
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul> -->
                        </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->
@endsection

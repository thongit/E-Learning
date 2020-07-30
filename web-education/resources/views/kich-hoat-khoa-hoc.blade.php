@extends('layout')
@section( 'content')
@include('header')
@section( 'css')
<script src="{{ asset('assets/js/sweet-alerts.init.js') }}"></script>
<link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@if (session('error'))
    <script>
        swal.fire("{{ session('error') }}","","error")
    </script>
@endif
@if (session('success'))
    <script>
        swal.fire("{{ session('success') }}","","success")
    </script>
@endif
<!-- Start Login
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="{{ route('xu-ly-kich-hoat-kh') }}" id="login-form" class="white-popup-block" method="POST">
                        @csrf
                        <div class="login-custom">
                            <div class="heading">
                                <h4><i class="fas fa-sign-in-alt"></i>Kích Hoạt Khóa Học</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <p>Nhập mã kích hoạt khóa học vào ô bên dưới.</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Nhập mã khóa học" type="text" name="nhap_ma">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" onclick="kichhoat()">
                                        Kích Hoạt Khóa Học
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->
@endsection

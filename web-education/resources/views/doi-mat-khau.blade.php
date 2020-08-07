@extends('layout')
@section( 'content')
@include('header')
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<!-- <script src="{{ asset('assets/js/sweet-alerts.init.js') }}"></script> -->
<link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" /> 
<!-- Start Login
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="{{ route('xu-ly-doi-mat-khau')}}" id="login-form" method="POST" class="white-popup-block">
                    @csrf
                        <div class="login-custom">
                            <div class="heading">
                                <h4><i class="fas fa-edit"></i>Đổi mật khẩu {{Session::get('xnmail')}}</h4>
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
                                    <input class="form-control" id="mat_khau" name="mat_khau" placeholder="Nhập mật khẩu mới" type="password" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                    <input class="form-control" id="xac-nhan-mat-khau" name="xac-nhan-mat-khau" placeholder="Xác nhận mật khẩu" type="password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit">
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
    <!-- End Login Area -->
@endsection

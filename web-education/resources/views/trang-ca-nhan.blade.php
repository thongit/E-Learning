@extends('layout')
@section( 'content')
@include('header')
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
<style>
.avatar {
  vertical-align: middle;
  width: 200px;
  height: 200px;
  border-radius: 50%;
}
</style>
<!-- Sweet alert init js-->
<script src="{{ asset('assets/js/sweet-alerts.init.js') }}"></script>
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
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="{{ route('xu-ly-sua')}}" id="register-form" method="POST" class="white-popup-block" enctype="multipart/form-data">
                    @csrf
                        <div class="login-custom">
                            <div class="heading">               
                                <h4><i class="fas fa-edit"></i>Thông tin cá nhân</h4>
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
                                    <img src="{{ asset('assets/images/'.$nguoidungs->anh_dai_dien) }}" alt="Avatar" class="avatar">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                    Chọn ảnh: <input type="file" class="form-control" id="anh-dai-dien" name="anh-dai-dien" aria-describedby="emailHelp" placeholder="Hình đại diện">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                             
                                    <div class="form-group">
                                       Họ tên: <input class="form-control" id="ho_ten" name="ho_ten" value="{{$nguoidungs->ho_ten}}" placeholder="Họ và tên*" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                               
                                    <div class="form-group">
                                       Email: <input class="form-control" id="email" name="email" value="{{$nguoidungs->email}}" placeholder="Email*" type="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                      CMND:  <input class="form-control" id="so_cmnd" name="so_cmnd" value="{{$nguoidungs->cmnd}}" placeholder="Số CMND*" type="number" maxlength="9" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                      Số điện thoại:  <input class="form-control" id="so_dt" name="so_dt" value="{{$nguoidungs->sdt}}" placeholder="Số điện thoại*" type="number"  maxlength="10" required>
                                    </div>
                                </div>
                            </div>
                            
                           
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                       Địa chỉ: <input class="form-control" id="dia_chi" name="dia_chi" value="{{$nguoidungs->dia_chi}}" placeholder="Địa chỉ" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit">
                                        Cập nhật
                                    </button>
                                </div>
                            </div>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    <!-- End Login Area -->
   
@endsection

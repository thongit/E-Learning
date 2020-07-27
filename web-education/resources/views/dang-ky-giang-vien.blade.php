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
    @if (session('thongbao'))
    <script>
        swal.fire("{{ session('thongbao') }}","","success")
    </script>
    @endif
    <div class="login-area default-padding white-popup-block">
        <div class="container">
                    
                    <div class="login-custom">
                        <div class="heading">               
                            <h4><i class="fas fa-plus"></i>Trở thành giảng viên</h4>
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
                            <label for="">Bạn muốn hợp tác tư cách cá nhân hay tổ chức?</label>
                            <select id="sectionChooser">
                                <option value="ca_nhan">Cá Nhân</option>
                                <option value="to_chuc">Tổ chức</option>
                            </select>
                            <div id="ca-nhan">
                            <form action="{{route('thanh-giang-vien')}}" method="POST" class="white-popup-block" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                  <label for="Kinh nghiêm giảng dạy">Kinh nghiêm giảng dạy</label>
                                  <select class="form-control" name="KinhNghiem">
                                    <option value="Đã từng dạy trực tiếp, nhưng không phải giảng viên chính thức.">Đã từng dạy trực tiếp, nhưng không phải giảng viên chính thức.</option>
                                    <option value="Dạy chuyên nghiệp tại các trường lớp">Dạy chuyên nghiệp tại các trường lớp</option>
                                    <option value="Đã có kinh nghiệm giảng dạy online">Đã có kinh nghiệm giảng dạy online</option>
                                    <option value="Chưa từng có hoạt động giảng dạy, chỉ hướng dẫn nhân viên, hoặc chỉ có kinh nghiệm trong nghề...">Chưa từng có hoạt động giảng dạy, chỉ hướng dẫn nhân viên, hoặc chỉ có kinh nghiệm trong nghề...</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="">Bạn đã có kinh nghiệm tạo dựng video khóa học chưa?</label>
                                  <select class="form-control">
                                    <option value="">Rồi</option>
                                    <option value="">Chưa</option>
                                  </select>
                                </div>
                                <div class="col-md-12">
                                <div class="row">
                                    <button type="submit">
                                        Đăng ký giảng viên
                                    </button>
                                </div>
                            </div>
                            </form>
                            </div>
                            <div id="to-chuc">
                                <form action="{{route('thanh-to-chuc')}}" method="POST" class="white-popup-block" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <label for="">Tên tổ chức</label>
                                  <input type="text" class="form-control" placeholder="Nhập tên tổ chức" name="TenToChuc" required="" value="{{ old('TenToChuc') }}">
                                </div>
                                <div class="form-group">
                                  <label for="">Mã số thuế</label>
                                  <input type="number" class="form-control" placeholder="Nhập mã số thuế" name="MaSoThue" required="" value="{{ old('MaSoThue') }}">
                                </div>
                                <div class="form-group">
                                  <label for="">Địa chỉ</label>
                                  <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="DiaChi" required="" value="{{ old('DiaChi') }}">
                                </div>
                                <div class="form-group">
                                  <label for="">Tên người liên hệ</label>
                                  <input type="text" class="form-control" placeholder="Nhập tên người liên hệ" name="TenNguoiLienHe" required="" value="{{ old('TenNguoiLienHe') }}">
                                </div>
                                <div class="form-group">
                                  <label for="">Số điện thoại người liên hệ</label>
                                  <input type="number" class="form-control" placeholder="Nhập số điện thoại người liên hệ" name="SoDienThoai" required="" value="{{ old('SoDienThoai') }}">
                                </div>
                                <div class="form-group">
                                  <label for="">Email</label>
                                  <input type="email" class="form-control" placeholder="Nhập email" name="Email" required="" value="{{ old('Email') }}">
                                </div>
                                <div class="row">
                                    <button type="submit">
                                        Đăng ký tổ chức
                                    </button>
                                </div>
                            </form>
                            </div>

                           
                        </div>
                        </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    <!-- End Login Area -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $(function() {
            $('#to-chuc').hide();
            $('#sectionChooser').change(function(){
                if($('#sectionChooser').val() == 'ca_nhan') {
                    $('#ca-nhan').show();
                    $('#to-chuc').hide();
                    
                } else {
                    $('#ca-nhan').hide();
                    $('#to-chuc').show(); 
                } 
            });
        });
    </script>
   
@endsection

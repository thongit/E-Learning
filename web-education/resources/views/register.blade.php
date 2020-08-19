@extends('layout')
@section( 'content')
@include('header')
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<!-- <script src="{{ asset('assets/js/sweet-alerts.init.js') }}"></script> -->
<link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<link href=" {{ asset ('assets/style.css') }}" rel="stylesheet">
<script>
    function validateform() {
        var password = document.form1.mat_khau.value;
        var ho_ten = document.form1.ho_ten.value;
        var mat_khau_nl = document.form1.mat_khau_nl.value;
        var so_cmnd = document.form1.so_cmnd.value;
        var so_dt = document.form1.so_dt.value;


        if (ho_ten.length < 3) {
            alert("Họ tên phải có ít nhất 3 ký tự!");
            return false;
        }
        else if (isNaN(so_cmnd)) {
            alert("Số CMND chỉ được nhập ký tự số!");
            return false;
        }
      
        else if (isNaN(so_dt)) {
            alert("Số điện thoại chỉ được nhập ký tự số!");
            return false;
        }

      else if (password.length < 6) {
            alert("Mật khẩu phải có ít nhất 6 ký tự!");
            return false;
        }
        else if (mat_khau_nl != password) {
            alert("Mật khẩu nhập lại không trùng khớp!");
            return false;
        }
        
    }
</script>
<!-- <script>
   
    $(document).ready(function(){
        $("#dangky").click(function(){
            var email = $("#email").val();
            var ho_ten = $("#ho_ten").val();
            var so_cmnd = $("#so_cmnd").val();
            var so_dt = $("#so_dt").val();
            var mat_khau = $("#mat_khau").val();
            var mat_khau_nl = $("#mat_khau_nl").val();

            // if (email="") {
            //     alert("Bạn chưa nhập email!");
            //     return false;
            // }
            // else if (so_cmnd="") {
            //     alert("Bạn chưa nhập số CMND!");
            //     return false;
            // }
            // else if (so_dt="") {
            //     alert("Bạn chưa nhập số điện thoại!");
            //     return false;
            // }
          
            else if (ho_ten.length < 3) {
                alert("Họ tên phải có ít nhất 3 ký tự!");
                return false;
            }
            else if (isNaN(so_cmnd)) {
                alert("Số CMND chỉ được nhập ký tự số!");
                return false;
            }
            else if (isNaN(so_dt)) {
                alert("Số điện thoại chỉ được nhập ký tự số!");
                return false;
            }
            else if (mat_khau.length < 6) {
                console.log(mat_khau);
                alert("Mật khẩu phải có ít nhất 6 ký tự!");
                return false;
            }
            else if (mat_khau_nl != mat_khau) {
                alert("Mật khẩu nhập lại không trùng khớp!");
                return false;
            }
            else
            {
                $.ajax({
                    url:"{{ route('xu-ly-dang-ky') }}",
                    method:"POST",
                    data:{
                        email:email,
                        ho_ten:ho_ten,
                        so_cmnd:so_cmnd,
                        so_dt:so_dt,
                        mat_khau:mat_khau,
                        mat_khau_nl:mat_khau_nl,
                        _token : ''
                    },
                    success:function(data){
                        if(data.msg == 0)
                        {
                            alert("Email đã tồn tại!");
                        }
                        else
                        {
                            location.replace("{{ route('xac-minh-tai-khoan')}}");
                        }
                    }
                });
            }
            
        });
    });
</script> -->

 <!-- Start Login
    // ============================================= -->
    @if (session('thongbao'))
    <script>
        swal.fire("{{ session('thongbao') }}","","success")
    </script>
    @endif
    @if (session('loi'))
    <script>
        swal.fire("{{ session('loi') }}","","error")
    </script>
    @endif
    @if (session('alerterror'))
    <script>
        swal.fire("{{ session('alerterror') }}","","error")
    </script>
    @endif
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form name="form1" action="{{ route('xu-ly-dang-ky')}}" onsubmit = "return validateform()" id="register-form" method="POST" class="white-popup-block">
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
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                               
                                    <div class="form-group">
                                    <input class="form-control" id="ho_ten" name="ho_ten" placeholder="Họ và tên*" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="so_cmnd" name="so_cmnd" placeholder="Số CMND*" type="text"  required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="so_dt" name="so_dt" placeholder="Số điện thoại*" type="text"   required>
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
                                <button type="submit" id="dangky">
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

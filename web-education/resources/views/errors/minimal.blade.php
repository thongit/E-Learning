<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Edocom - Education & LMS Template">
    <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .code {
                border-right: 2px solid;
                font-size: 26px;
                padding: 0 15px 0 15px;
                text-align: center;
            }

            .message {
                font-size: 18px;
                text-align: center;
            }

            .bg-transparent {
                background-color: transparent;
            }

            .text-grey-darkest {
                color: #3d4852;
            }

            .font-bold {
                font-weight: 700;
            }

            .uppercase {
                text-transform: uppercase;
            }

            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }

            .border-2 {
                border-width: 2px;
            }

            .border-grey-light {
                border-color: #dae1e7;
            }

            .hover\:border-grey:hover {
                border-color: #b8c2cc;
            }

            .rounded-lg {
                border-radius: .5rem;
            }
        </style>
    <!-- ========== Page Title ========== -->
    <title>Edocom - Education & LMS Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href=" {{ asset ('assets/img/favicon.png') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
 <script src="{{ asset('assets/js/sweet-alerts.init.js') }}"></script>
<link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" /> 
    <link href=" {{ asset ('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href=" {{ asset ('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href=" {{ asset ('assets/css/flaticon-set.css') }}" rel="stylesheet">
    <link href=" {{ asset ('assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href=" {{ asset ('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href=" {{ asset ('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href=" {{ asset ('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href=" {{ asset ('assets/css/animate.css') }}" rel="stylesheet">
    <link href=" {{ asset ('assets/css/bootsnav.css') }}" rel="stylesheet">
    <link href=" {{ asset ('assets/style.css') }}" rel="stylesheet">
    <link href=" {{ asset ('assets/css/responsive.css') }}" rel="stylesheet">


    @yield('css')
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respondjs IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=" {{ asset ('assets/js/html5/html5shiv.min.js') }}"></script>
      <script src=" {{ asset ('assets/js/html5/respond.min.js') }}"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->
    <!-- Start Header Top
        ============================================= -->
        <div class="top-bar-area bg-dark inc-border text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 address-info text-left">
                        <div class="info">
<!--                             <ul>
                                <li>
                                    <i class="fas fa-copy"></i> Tổng khóa học: <strong>23400</strong>
                                </li>
                                <li>
                                    <i class="fas fa-user-shield"></i> Giáo viên <strong>655</strong>
                                </li>
                                <li>
                                    <i class="fas fa-phone"></i> Liên hệ <a >0123456789</a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    @if(Session::get('ho_ten')== null)
                     <div class="col-md-6 link text-right">
                        <ul>
                            <li>
                                <a href="{{ route('form-kich-hoat')}}">Kích hoạt khóa học</a>
                            </li>
                            <li>
                                <a href="{{ route('dang-nhap')}}">Đăng nhập</a>
                            </li>
                            <li>
                                <a id="myBtn" href="{{ route('dang-ky')}}">Đăng ký</a>
                            </li>
                        </ul>
                    </div>
                    @endif
                    @if(Session::get('ho_ten')!= null)
                    <div class="col-md-8 link text-right">
                        <ul>
                            @if(Session::get('loai_tk')==1)
                            <li><a class="btn-danger" href="{{ route('tro-thanh-giang-vien')}}">Trở thành giảng viên</a></li>
                            @endif
                            @if(Session::get('loai_tk')==2)
                            <li><a class="btn-danger" href="/khoa-hoc/ds-khoa-hoc-da-tao">Quản lý khóa học</a></li>
                            @endif
                            <li>
                            <a id="trang_cn" href="{{ route('sua')}}">{{ Session::get('ho_ten') }}</a>
                            </li>
                            <li>
                                <a id="myBtn" onclick="logout()" href="#">Đăng Xuất</a>
                            </li>
                        </ul>
                        <script>
                            function logout() {
                                Swal.fire({
                                title: 'Bạn có chắc muốn đăng xuất?',
                                type: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Có',
                                cancelButtonText:'Không'
                                }).then((result) => {
                                if (result.value) {
                                    open("{{ route('dang-xuat') }}","_self")
                                }
                            })
                        };
                        </script>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    <!-- End Header Top -->

        <div class="full-height" style="padding: 20%;">
            <div class="flex-center">
                <div class="code">
                    @yield('code')
                </div>

                <div class="message" style="padding: 10px;">
                    @yield('message')
                </div>
            </div>
            <div class="flex-center">
                <a href="{{ app('router')->has('home') ? route('home') : url('/') }}">
                    <button class="bg-transparent text-grey-darkest font-bold uppercase tracking-wide py-3 px-6 border-2 border-grey-light hover:border-grey rounded-lg">
                        {{ __('Về trang chủ') }}
                    </button>
                </a>
            </div>
        </div>
        
        

    <!-- Start Footer -->
        <!-- ============================================= -->
        <footer class="bg-dark text-light top-padding">
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; 2020 - Bản quyền team QTTT </p>
                        </div>
                        <div class="col-md-6 text-right link">
                            <ul>
                                <li>
                                    <a href="#">Giới thiệu</a>
                                </li>
                                <li>
                                    <a href="#">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </footer>
 <!-- End Footer -->

        <!-- jQuery Frameworks
        ============================================= -->
        <script src=" {{ asset ('assets/js/jquery-1.12.4.min.js') }}"></script>
        <script src=" {{ asset ('assets/js/bootstrap.min.js') }}"></script>
        <script src=" {{ asset ('assets/js/equal-height.min.js') }}"></script>
        <script src=" {{ asset ('assets/js/jquery.appear.js') }}"></script>
        <script src=" {{ asset ('assets/js/jquery.easing.min.js') }}"></script>
        <script src=" {{ asset ('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src=" {{ asset ('assets/js/modernizr.custom.13711.js') }}"></script>
        <script src=" {{ asset ('assets/js/owl.carousel.min.js') }}"></script>
        <script src=" {{ asset ('assets/js/wow.min.js') }}"></script>
        <script src=" {{ asset ('assets/js/progress-bar.min.js') }}"></script>
        <script src=" {{ asset ('assets/js/isotope.pkgd.min.js') }}"></script>
        <script src=" {{ asset ('assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src=" {{ asset ('assets/js/count-to.js') }}"></script>
        <script src=" {{ asset ('assets/js/YTPlayer.min.js') }}"></script>
        <script src=" {{ asset ('assets/js/loopcounter.js') }}"></script>
        <script src=" {{ asset ('assets/js/jquery.nice-select.min.js') }}"></script>
        <script src=" {{ asset ('assets/js/bootsnav.js') }}"></script>
        <script src=" {{ asset ('assets/js/main.js') }}"></script>
       
        @yield('js')
        

    </body>
    </html>

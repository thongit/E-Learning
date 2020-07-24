<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Edocom - Education & LMS Template">

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
                    <div class="col-md-8 address-info text-left">
                        <div class="info">
                            <ul>
                                <li>
                                    <i class="fas fa-copy"></i> Tổng khóa học: <strong>23400</strong>
                                </li>
                                <li>
                                    <i class="fas fa-user-shield"></i> Giáo viên <strong>655</strong>
                                </li>
                                <li>
                                    <i class="fas fa-phone"></i> Liên hệ <a >0123456789</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @if(Session::get('ho_ten')== null)
                     <div class="col-md-4 link text-right">
                        <ul>
                            <li>
                                <a href="dang-nhap">Đăng nhập</a>
                            </li>
                            <li>
                                <a id="myBtn" href="dang-ky">Đăng ký</a>
                            </li>
                        </ul>
                    </div>
                    @endif
                    @if(Session::get('ho_ten')!= null)
                    <div class="col-md-4 link text-right">
                        <ul>
                            <li>
                            <h5>User: {{ Session::get('ho_ten') }} </h5>
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


    <!-- Start Body -->
        @yield('content')
    <!-- End Body -->

    <!-- Start Footer -->
        <!-- ============================================= -->
        <footer class="bg-dark text-light top-padding">
            <div class="container">
                <div class="f-items default-padding">
                    <div class="row">
                        <!-- Single item -->
                        <div class="col-md-4 col-sm-6 item equal-height">
                            <div class="f-item about">
                                <h4>Giới thiệu</h4>
                                <p>
                                    Xin chào
                                </p>
                                <ul>
                                    <li>
                                        <p>Email <span><a href="mailto:info@example.com">teamqttt@example.com</a></span></p>
                                    </li>
                                    <li>
                                        <p>Office <span>Trường cao đẳng kỹ thuật Cao Thắng</span></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single item -->

                        <!-- Single item -->
                        <div class="col-md-4 col-sm-6 item equal-height">
                            <div class="f-item link">
                                <h4>Khóa học</h4>
                                <ul>
                                    <li><a href="">Ngoại ngữ</a></li>
                                    <li><a href="">Công nghệ thông tin</a></li>
                                    <li><a href="">Tin học văn phòng</a></li>
                                    <li><a href="">Âm nhạc</a></li>
                                    <li><a href="">Thể thao - Sức khỏe</a></li>
                                    <li><a href="">Thiết kế</a></li>
                                    <li><a href="">Phát triển bản thân</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single item -->

                        <!-- Single item -->
                        <div class="col-md-4 col-sm-6 item equal-height">
                            <div class="f-item popular-courses">
                                <h4>Khóa học phổ biến</h4>
                                <ul>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src=" {{ asset ('assets/img/gallery/1.jpg') }}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="#">Tiếng anh giao tiếp</a>
                                            <ul class="meta">
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </li>
                                                <li>(128) Đánh giá</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src=" {{ asset ('assets/img/gallery/3.jpg') }}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="#">Photoshop cho người mới bắt đầu</a>
                                            <ul class="meta">
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>(98) Đánh giá</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src=" {{ asset ('assets/img/gallery/4.jpg') }}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="#">Phát triển kỹ năng giao tiếp</a>
                                            <ul class="meta">
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </li>
                                                <li>(688) Đánh giá</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single item -->
                    </div>
                </div>
            </div>
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

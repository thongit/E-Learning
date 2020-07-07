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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
                                    <i class="fas fa-copy"></i> Total courses: <strong>23400</strong>
                                </li>
                                <li>
                                    <i class="fas fa-user-shield"></i> Instructor: <strong>655</strong>
                                </li>
                                <li>
                                    <i class="fas fa-phone"></i> Help Line: <strong>+123 456 7890</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                     <div class="col-md-4 link text-right">
                        <ul>
                            <li>
                                @include('login')
                            </li>
                            <li>
                                <a id="myBtn" href="#">Login</a>
                            </li>
                        </ul>
                    </div>
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
                                <h4>About</h4>
                                <p>
                                    Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address.
                                </p>
                                <ul>
                                    <li>
                                        <p>Email <span><a href="mailto:info@example.com">info@example.com</a></span></p>
                                    </li>
                                    <li>
                                        <p>Office <span>144, Jalkheri Street, Seattle, WA 98104-2648.</span></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single item -->

                        <!-- Single item -->
                        <div class="col-md-2 col-sm-6 item equal-height">
                            <div class="f-item link">
                                <h4>Categories</h4>
                                <ul>
                                    <li>
                                        <a href="#"><i class="ti-angle-right"></i> All Courses</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ti-angle-right"></i> Event</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ti-angle-right"></i> Digital Marketing</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ti-angle-right"></i> Design & Branding</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ti-angle-right"></i> Storytelling</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ti-angle-right"></i> Education</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ti-angle-right"></i> Geography</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single item -->

                        <!-- Single item -->
                        <div class="col-md-2 col-sm-6 item equal-height">
                            <div class="f-item link">
                                <h4>Support</h4>
                                <ul>
                                    <li>
                                        <a href="#"><i class="ti-angle-right"></i> Documentation</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ti-angle-right"></i> Forums</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ti-angle-right"></i> Language Packs</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ti-angle-right"></i> Release Status</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ti-angle-right"></i> LearnPress</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ti-angle-right"></i> Feedback</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single item -->

                        <!-- Single item -->
                        <div class="col-md-4 col-sm-6 item equal-height">
                            <div class="f-item popular-courses">
                                <h4>Popular Courses</h4>
                                <ul>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src=" {{ asset ('assets/img/gallery/1.jpg') }}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="#">Subjects allied to Creative arts and design</a>
                                            <ul class="meta">
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </li>
                                                <li>(128) enrolled</li>
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
                                            <a href="#">Business and administrative subjects</a>
                                            <ul class="meta">
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>(98) enrolled</li>
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
                                            <a href="#">Business and administrative subjects</a>
                                            <ul class="meta">
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </li>
                                                <li>(688) enrolled</li>
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
                            <p>&copy; Copyright 2020. All Rights Reserved.</p>
                        </div>
                        <div class="col-md-6 text-right link">
                            <ul>
                                <li>
                                    <a href="#">Terms of user</a>
                                </li>
                                <li>
                                    <a href="#">License</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
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

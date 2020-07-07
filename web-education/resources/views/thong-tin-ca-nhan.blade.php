@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/12.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Thông tin cá nhân</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Advisor Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Advisor Details
    ============================================= -->
    <div class="advisor-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="advisor-info">
                    <!-- Start Thumbnail -->
                    <div class="col-md-5">
                        <div class="thumb">
                            <img src="assets/img/advisor/22.jpg" alt="Thumb">
                            <div class="info">
                                <h4>Nguyễn văn A</h4>
                                <p>
                                    Sinh viên
                                </p>
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="dribbble">
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Thumbnail -->

                    <!-- Start Content -->
                    <div class="col-md-7 content">
                        <div class="course-info-list">
                            <ul>
                                <li>
                                    <h4>Họ và tên</h4>
                                    <h5>Nguyễn Văn A</h5>
                                </li>
                                <li>
                                    <h4>Email</h4>
                                    <h5>abc@gmail.com</h5>
                                </li>
                                <li>
                                    <h4>Số điện thoại</h4>
                                    <h5>0987645678</h5>
                                </li>
                            </ul>
                        </div>
                        <!-- Star Tab Info -->
                        <div class="tab-info">
                            <!-- Tab Nav -->
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                        Đổi mật khẩu
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                        Thông tin liên hệ
                                    </a>
                                </li>
                            </ul>
                            <!-- End Tab Nav -->
                            <!-- Start Tab Content -->
                            <div class="tab-content tab-content-info">
                                <!-- Single Tab -->
                                <div id="tab1" class="tab-pane fade active in">
                                    <div class="info title">
                                        <p>
                                            Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting. earnestly advantage estimable extensive. Five settle education him departure any arranging one prevailed. Their end whole migh
                                        </p>
                                        <p>
                                            Affixed civilly moments promise explain fertile in. Assurance advantage belonging happiness departure so of. Now improving and one sincerity intention allowance commanded not. Oh an am frankness be necessary earnestly advantage estimable extensive. Five settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab2" class="tab-pane fade">
                                    {{-- <div class="info title">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>NO.</th>
                                                        <th>Title</th>
                                                        <th>Status</th>
                                                        <th>Price</th>
                                                        <th>Rating</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>01.</td>
                                                        <td><a href="#">Basic Web Development</a></td>
                                                        <td>Pending</td>
                                                        <td>$23.00</td>
                                                        <td>4.5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>02.</td>
                                                        <td><a href="#">Software Engineering</a></td>
                                                        <td>Published</td>
                                                        <td>$55.00</td>
                                                        <td>4.5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>03.</td>
                                                        <td><a href="#">Introduction of machine</a></td>
                                                        <td>Pending</td>
                                                        <td>$44.00</td>
                                                        <td>4.5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>04.</td>
                                                        <td><a href="#">Hidden potential</a></td>
                                                        <td>Published</td>
                                                        <td>$54.00</td>
                                                        <td>5.0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05.</td>
                                                        <td><a href="#">Introduction of PHP</a></td>
                                                        <td>Published</td>
                                                        <td>$32.00</td>
                                                        <td>4.9</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> --}}
                                    <div class="login-area default-padding-mk">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form action="#" id="login-form" class="white-popup-block">
                                                        <div class="login-custom">
                                                            <div class="heading">
                                                                <h4><i class="fas fa-edit"></i>Đổi mật khẩu</h4>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <input class="form-control" placeholder="Mật khẩu hiện tại*" type="password">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <input class="form-control" placeholder="Mật khẩu mới*" type="password">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <input class="form-control" placeholder="Xác nhận mật khẩu mới*" type="password">
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
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab3" class="tab-pane">
                                    <div class="info title">
                                        <form action="assets/mail/contact.php" method="POST" class="contact-form">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    {{-- <div class="form-group">
                                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                                        <span class="alert-error"></span>
                                                    </div> --}}
                                                    <h4>Họ và tên</h4>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input class="form-control" id="name" name="name" type="text">
                                                        <span class="alert-error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h4>Email</h4>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input class="form-control" id="email" name="email" type="email">
                                                        <span class="alert-error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h4>Số điện thoại</h4>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input class="form-control" id="phone" name="phone"  type="text">
                                                        <span class="alert-error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h4>Địa chỉ</h4>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input class="form-control" id="phone" name="phone"  type="text">
                                                        <span class="alert-error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h4>CMND</h4>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input class="form-control" id="phone" name="phone"  type="phone">
                                                        <span class="alert-error"></span>
                                                    </div>
                                                </div>
                                            {{-- <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group comments">
                                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Me About Courses *"></textarea>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <button type="submit" name="submit" id="submit">
                                                        Lưu thay đổi </i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Alert Message -->
                                            <div class="col-md-12 alert-notification">
                                                <div id="message" class="alert-msg"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Single Tab -->
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Tab Info -->

                    </div>
                    <!-- End Content -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Advisor Details -->

    <div class="padding-tncn"></div>

    <!-- Start Newsletter
    ============================================= -->
    <div class="newsletter-area fixed">
        <div class="container">
            <div class="subscribe-items shadow theme-hard default-padding bg-cover" style="background-image: url(assets/img/banner/11.jpg);">
                <div class="row">
                    <div class="col-md-7 left-info">
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info">
                                <h3>Subscribe to our newsletter</h3>
                                <p>
                                    Prospect humoured mistress to by proposal marianne attended. Simplicity the far admiration preference everything.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <form action="#">
                            <div class="input-group">
                                <input type="email" placeholder="Enter your e-mail here" class="form-control" name="email">
                                <button type="submit">
                                    Subscribe <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Newsletter -->
@endsection


@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Liên hệ</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Info
    ============================================= -->
    <div class="contact-info-area default-padding">
        <div class="container">
            <!-- Start Contact Info -->
            <div class="contact-info text-center">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="info">
                                <h4>Điện thoại</h4>
                                <span><a href="tel:+0123456789">0123456789</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-location"></i>
                            </div>
                            <div class="info">
                                <h4>Địa chỉ</h4>
                                <span><a href="https://goo.gl/maps/UtQpyQHm3Y7eNSHC8" target="_blank">Trường Cao Đẳng Kỹ Thuật Cao Thắng</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info">
                                <h4>Email</h4>
                                <span>info@yourdomain.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Info -->

            <div class="row contact-bottom-info">
                <!-- Start Maps & Contact Form -->
                <div class="maps-form">
                    <div class="col-md-6 maps">
                        <h4>Định vị bản đồ</h4>
                        <div class="google-maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.517758056715!2d106.69916291462093!3d10.771600262228636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f40a3b49e59%3A0xa1bd14e483a602db!2sCao%20Thang%20Technical%20College!5e0!3m2!1sen!2s!4v1594263614326!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 form">
                        <div class="heading">
                            <h4>Liên hệ chúng tôi</h4>
                        </div>
                        <form action="assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Tên" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Số điện thoại" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Nội dung *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit">
                                        Gửi liên hệ <i class="fa fa-paper-plane"></i>
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
                <!-- End Maps & Contact Form -->

            </div>
        </div>
    </div>
    <!-- End Contact Info -->
@endsection

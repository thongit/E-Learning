@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url({{asset('assets/img/banner/19.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Chi tiết khóa học</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Course Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Course Details
    ============================================= -->
    <div class="course-details-area default-padding">
        <div class="container">
            <div class="row">
                <!-- Start Course Info -->
                <div class="col-md-9">
                    <div class="courses-info">
                        <h2>
                            {{ $dsKhoaHoc->ten_khoa_hoc}}
                        </h2>
                        <div class="course-meta">
                            <div class="item author">
                                <div class="thumb">
                                    <a href="#"><img alt="Thumb" src="{{asset('assets/img/team/6.jpg')}}"></a>
                                </div>
                                <div class="desc">
                                    <h4>Author</h4>
                                    <a href="#">Munil Druva</a>
                                </div>
                            </div>
                            <div class="item category">
                                <h4>Mức Độ</h4>
                                <a href="#">{{ $dsKhoaHoc->muc_do }}</a>
                            </div>
                            <div class="item rating">
                                <h4>Review</h4>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(1 Rating)</span>
                            </div>
                            <div class="item price">
                                <h4>Giá</h4>
                                <span>{{ number_format($dsKhoaHoc->gia) }} VNĐ</span>
                            </div>
                            <div class="align-right">
                                <a class="btn btn-theme effect btn-sm" href="#">
                                    <i class="fas fa-chart-bar"></i> Enroll
                                </a>
                            </div>
                        </div>
                        <img src="{{asset('assets/img/courses/1.jpg')}}" alt="Thumb">
                        <!-- Star Tab Info -->
                        <div class="tab-info">
                            <!-- Tab Nav -->
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                        Thông tin chung
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                        Giáo trình
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                       Giảng viên
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab4" aria-expanded="false">
                                        Đánh giá
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
                                            {!! $dsKhoaHoc->mo_ta_chi_tiet !!}
                                        </p>
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab2" class="tab-pane fade">
                                    <div class="info title">
                                        <p>
                                            Placing assured be if removed it besides on. Far shed each high read are men over day. Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had now those ought set often which. Or snug dull he show more true wish. No at many deny away miss evil. On in so indeed spirit an mother. Amounted old strictly but marianne admitted. People former is remove remain as.
                                        </p>
                                        <h4>List Of Courses</h4>
                                        <!-- Start Course List -->
                                        <div class="course-list-items acd-items acd-arrow">
                                            <div class="panel-group symb" id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                                                <strong>01</strong> Java Programming
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="ac1" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <ul>
                                                                <li>
                                                                    <div class="title">
                                                                        <i class="fas fa-play-circle"></i>
                                                                        <p>
                                                                            Lecture 1.0
                                                                        </p>
                                                                        <h5>
                                                                            <a href="#">Introduction of java</a>
                                                                        </h5>
                                                                        <div class="access-type">
                                                                            <i class="fas fa-eye"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="intro">
                                                                        <div class="item">
                                                                            <p>
                                                                                Published - 15 Aug, 2020
                                                                            </p>
                                                                        </div>
                                                                        <div class="item">
                                                                            <p>
                                                                                Duration: 1 hours 30 min
                                                                            </p>
                                                                           <a href="#">Preview</a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="title">
                                                                        <i class="fas fa-file"></i>
                                                                        <p>
                                                                            Lecture 1.2
                                                                        </p>
                                                                        <h5>
                                                                            <a href="#">Basic development</a>
                                                                        </h5>
                                                                        <div class="access-type">
                                                                            <i class="fas fa-lock"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="intro">
                                                                        <div class="item">
                                                                            <p>
                                                                                Published - 28 Apr, 2020
                                                                            </p>
                                                                        </div>
                                                                        <div class="item">
                                                                            <p>
                                                                                Duration: 3 hours 45 min
                                                                            </p>
                                                                           <a href="#">Preview</a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Course List -->
                                        <!-- Start Course List -->
                                        <div class="course-list-items acd-items acd-arrow">
                                            <div class="panel-group symb" id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                                                <strong>02</strong> PHP Programmig
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="ac2" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ul>
                                                                <li>
                                                                    <div class="title">
                                                                        <i class="fas fa-play-circle"></i>
                                                                        <p>
                                                                            Lecture 1.0
                                                                        </p>
                                                                        <h5>
                                                                            <a href="#">Introduction</a>
                                                                        </h5>
                                                                        <div class="access-type">
                                                                            <i class="fas fa-lock"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="intro">
                                                                        <div class="item">
                                                                            <p>
                                                                                Published - 15 Aug, 2020
                                                                            </p>
                                                                        </div>
                                                                        <div class="item">
                                                                            <p>
                                                                                Duration: 1 hours 30 min
                                                                            </p>
                                                                           <a href="#">Preview</a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="title">
                                                                        <i class="fas fa-file"></i>
                                                                        <p>
                                                                            Lecture 1.2
                                                                        </p>
                                                                        <h5>
                                                                            <a href="#">Benifits Of Function</a>
                                                                        </h5>
                                                                        <div class="access-type">
                                                                            <i class="fas fa-lock"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="intro">
                                                                        <div class="item">
                                                                            <p>
                                                                                Published - 28 Apr, 2020
                                                                            </p>
                                                                        </div>
                                                                        <div class="item">
                                                                            <p>
                                                                                Duration: 3 hours 45 min
                                                                            </p>
                                                                           <a href="#">Preview</a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Course List -->
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab3" class="tab-pane fade">
                                    <div class="info title">
                                        <div class="advisor-list-items">
                                            <!-- Advisor Item -->
                                            <div class="item">
                                                <div class="thumb">
                                                    <img src="{{asset('assets/img/advisor/1.jpg')}}" alt="Thumb">
                                                </div>
                                                <div class="info">
                                                    <div class="author">
                                                        <h4>Devid Mark</h4>
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
                                                    <span class="designation">senior lecturer</span>
                                                    <p>
                                                        Several carried through an of up attempt gravity. Situation to be at offending elsewhere distrusts if. Particularfor considered projection cultivated. Worth of do doubt shall
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- End Advisor Item -->
                                            <!-- Advisor Item -->
                                            <div class="item">
                                                <div class="thumb">
                                                    <img src="{{asset('assets/img/advisor/2.jpg')}}" alt="Thumb">
                                                </div>
                                                <div class="info">
                                                    <div class="author">
                                                        <h4>Bubtas Abraham</h4>
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
                                                    <span class="designation">Java Programmer</span>
                                                    <p>
                                                        Several carried through an of up attempt gravity. Situation to be at offending elsewhere distrusts if. Particular for considered projection cultivated. Worth of do doubt shall
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- End Advisor Item -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab4" class="tab-pane fade">
                                    <div class="info title">
                                        <div class="course-rating-list">
                                            <div class="average-rating">
                                                <h2>4.5</h2>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <h4>28 Rating</h4>
                                            </div>
                                            <div class="rating-status">
                                                <!-- Progress Bar Start -->
                                                <div class="progress-box">
                                                    <h5>5 Star <span class="pull-right">90%</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" data-width="90"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-box">
                                                    <h5>4 Star <span class="pull-right">10%</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" data-width="10"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-box">
                                                    <h5>3 Star <span class="pull-right">0%</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" data-width="0"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-box">
                                                    <h5>2 Star <span class="pull-right">0%</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" data-width="0"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-box">
                                                    <h5>1 Star <span class="pull-right">0%</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" data-width="0"></div>
                                                    </div>
                                                </div>
                                                <!-- End Progressbar -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Tab -->
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Tab Info -->
                    </div>
                </div>
                <!-- End Course Info -->

                <!-- Start Course Sidebar -->
                <div class="col-md-3">
                    <div class="aside">
                        <!-- Sidebar Item -->
                        <div class="sidebar-item course-info">
                            <div class="title">
                                <h4>Course Features</h4>
                            </div>
                            <ul>
                                <li><i class="flaticon-translation"></i> Language  <span class="pull-right">English</span></li>
                                <li><i class="flaticon-faculty-shield"></i> Lectures  <span class="pull-right">23</span></li>
                                <li><i class="flaticon-film"></i> Video  <span class="pull-right">04:15:38</span></li>
                                <li><i class="flaticon-levels"></i> Level  <span class="pull-right">beginner</span></li>
                                <li><i class="flaticon-group-of-students"></i> Enrolled  <span class="pull-right">136</span></li>
                            </ul>
                        </div>
                        <!-- End Sidebar Item -->
                        <!-- Sidebar Item -->
                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>Courses Category</h4>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">Java Programming <span>23</span></a>
                                </li>
                                <li>
                                    <a href="#">Social Science <span>0</span></a>
                                </li>
                                <li>
                                    <a href="#">Business Management <span>12</span></a>
                                </li>
                                <li>
                                    <a href="#">Online Learning <span>17</span></a>
                                </li>
                                <li>
                                    <a href="#">Course Management <span>0</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Sidebar Item -->
                        <!-- Sidebar Item -->
                        <div class="sidebar-item similar-courses">
                            <div class="title">
                                <h4>Similar Courses</h4>
                            </div>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{asset('assets/img/gallery/9.jpg')}}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Subjects allied to Creative arts and design</a>
                                        <div class="meta">
                                            <span>$29.00</span>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{asset('assets/img/gallery/10.jpg')}}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Business and administrative subjects</a>
                                        <div class="meta">
                                            <span>$26.00</span>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{asset('assets/img/gallery/11.jpg')}}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Business and administrative subjects</a>
                                        <div class="meta">
                                            <span>$18.00</span>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End Sidebar Item -->
                    </div>
                </div>
                <!-- End Course Sidebar -->
            </div>
        </div>
    </div>
    <!-- End Course Details -->

    <!-- Start Newsletter
    ============================================= -->
    <div class="newsletter-area fixed">
        <div class="container">
            <div class="subscribe-items shadow theme-hard default-padding bg-cover" style="background-image: url({{asset('assets/img/banner/11.jpg')}});">
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

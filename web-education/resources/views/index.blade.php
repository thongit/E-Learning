@extends('layout')
@section('content')

@if (session('alerterror'))
    <script>
        swal.fire("{{ session('alerterror') }}","","error")
    </script>
@endif

@include('header')
  <!-- Start Banner
    ============================================= -->
    <div class="banner-area">
        <div id="bootcarousel" class="carousel text-light text-center top-pad text-dark slide animate_text" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootcarousel" data-slide-to="0" class="active"></li>
                <li data-target="#bootcarousel" data-slide-to="1"></li>
            </ol>


            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="item active bg-cover" style="background-image: url(assets/img/banner/4.jpg);">
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">Học hỏi từ chúng tôi <strong>  tăng tốc tương lai tươi sáng của bạn.</strong></h2>
                                            <p data-animation="animated slideInLeft">
                                            # Cải thiện cuộc sống thông qua học tập
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">Tìm hiểu thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item bg-cover" style="background-image: url(assets/img/banner/17.jpg);">
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">Học từ khóa đào tạo trực tuyến tốt nhất<strong></strong></h2>
                                            <p data-animation="animated slideInLeft">
                                            # Cải thiện cuộc sống thông qua học tập
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">Tìm hiểu thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Trước</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Tiếp</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                 <div class="about-items">
                    <div class="about-info">
                        <h2>Xin Chào ! <span>Chúng tôi là Educom</span></h2>
                        <blockquote>
                            Educom tự hào là "siêu thị" các khóa học trực tuyến ngắn hạn lớn nhất Đông Nam Á với hàng nghìn khóa học thuộc mọi lĩnh vực, đội ngũ giảng viên chuyên nghiệp, giàu kinh nghiệm và mạng lưới học viên rộng khắp cả nước. Educom - nơi bạn học mọi kĩ năng làm chủ tương <br>
                            Educom - Sự lựa chọn cho mọi lứa tuổi, kỹ năng và trình độ<br>
                            Phương pháp sư phạm LIPE<br>
                            Trải nghiệm học tập không giới hạn<br>
                            Mua một lần học trọn đời<br>
                            Dễ học, dễ ứng dụng<br>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Categories
    ============================================= -->
    <div class="category-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Lĩnh vực phổ biến</h2>
                    </div>
                </div>
            </div>
            <div class="category-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item mariner">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="ti-pulse"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Analysis of Algorithms</h5>
                                        <p>
                                            Current enrolled <strong>1278</strong>
                                        </p>
                                        <span>28 Courses</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item java">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="ti-desktop"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Computer Science</h5>
                                        <p>
                                            Current enrolled <strong>9577</strong>
                                        </p>
                                        <span>56 Courses</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item malachite">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="ti-server"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Data Science</h5>
                                        <p>
                                            Current enrolled <strong>2544</strong>
                                        </p>
                                        <span>29 Courses</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item brilliantrose">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="ti-panel"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Engineering</h5>
                                        <p>
                                            Current enrolled <strong>6788</strong>
                                        </p>
                                        <span>87 Courses</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item casablanca">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="ti-ruler-pencil"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Architecture</h5>
                                        <p>
                                            Current enrolled <strong>1766</strong>
                                        </p>
                                        <span>39 Courses</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item emerald">
                            <a href="#">
                                <div class="item-box">
                                    <div class="icon">
                                        <i class="ti-paint-bucket"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Art & Design</h5>
                                        <p>
                                            Current enrolled <strong>4355</strong>
                                        </p>
                                        <span>36 Courses</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->

    <!-- Start Popular Courses
        ============================================= -->
        <div class="popular-courses-area weekly-top-items default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="top-course-items">
                        <!-- Single Item -->
                        @foreach($dsKhoaHoc as $khoaHoc)
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item">
                                <div class="thumb">
                                    <img class="img-khoa-hoc" src="{{ asset('assets/images/'.$khoaHoc->hinh_anh) }}" alt="Thumb">
                                    <div class="overlay">
                                        <a href="#">
                                            <img src="{{ asset('assets/images/'.$khoaHoc->giangVien->anh_dai_dien) }}" alt="Thumb">
                                        </a>
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 04:15:38</li>
                                            <li><i class="fas fa-list-ul"></i> 32</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#">{{ $khoaHoc->giangVien->ho_ten }}</a>
                                                <a href="#"> {{ $khoaHoc->LinhVuc->ten_linh_vuc }}</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <span>(1k)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4>
                                        <a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $khoaHoc->id) }}" class="lam-gon-van-ban-mo-ta"> {{ $khoaHoc->ten_khoa_hoc }}</a>
                                    </h4>
                                    <p class="lam-gon-van-ban-mo-ta">
                                        {{ $khoaHoc->mo_ta_ngan }}
                                    </p>
                                    <div class="footer-meta">
                                        <a class="btn btn-theme effect btn-sm" href="#">Mua Ngay</a>
                                        <h4>{{ number_format($khoaHoc->gia) }} VNĐ</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Single Item -->
                    </div>
                </div>
            </div>
        </div>
@endsection

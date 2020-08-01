@extends('layout')
<title>EDUQTTT - Trang chủ</title>
@section('content')

@if (session('alerterror'))
    <script>
        swal.fire("{{ session('alerterror') }}","","error")
    </script>
@endif

@if (session('success'))
    <script>
        swal.fire("{{ session('success') }}","","success")
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
    {{--  <div class="category-area bg-gray default-padding">
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
                    @foreach($dsLinhVuc as $item)
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item java">
                            <a href="/linh-vuc/{{$item->id}}">
                                <div class="item-box">
                                    <div class="info">
                                        <h5>{{$item->ten_linh_vuc}}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>  --}}
    <!-- End Categories -->

    <!-- Start Categories
        ============================================= -->
        <div class="category-area bg-gray default-padding">
            <div class="container">
                <div class="row">
                    <div class="site-heading text-center">
                        <div class="col-md-8 col-md-offset-2">
                            <h2>Lĩnh Vực Phổ Biến</h2>
                        </div>
                    </div>
                </div>
                <div class="category-items">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item mariner">
                                <a href="{{ route('linh-vuc', 1)}}">
                                    <div class="item-box">
                                        <div class="icon">
                                            <i class="fas fa-book"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Ngoại Ngữ</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item java">
                                <a href="{{ route('linh-vuc', 2)}}">
                                    <div class="item-box">
                                        <div class="icon">
                                            <i class="ti-desktop"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Công Nghệ Thông Tin</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item malachite">
                                <a href="{{ route('linh-vuc', 8)}}">
                                    <div class="item-box">
                                        <div class="icon">
                                            <i class="ti-pulse"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Marketing</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item brilliantrose">
                                <a href="{{ route('linh-vuc', 4)}}">
                                    <div class="item-box">
                                        <div class="icon">
                                            <i class="fas fa-music"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Âm Nhạc</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item casablanca">
                                <a href="{{ route('linh-vuc', 6)}}">
                                    <div class="item-box">
                                        <div class="icon">
                                            <i class="ti-ruler-pencil"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Thiết Kế</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item emerald">
                                <a href="{{ route('linh-vuc', 5)}}">
                                    <div class="item-box">
                                        <div class="icon">
                                            <i class="fas fa-volleyball-ball"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Thể Thao Sức Khỏe</h5>
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
                    <div class="site-heading text-center">
                        <div class="col-md-8 col-md-offset-2">
                            <h2>Khóa Học Phổ Biến</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="top-course-items">
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
                                        <li><i class="fas fa-list-ul"></i> {{$khoaHoc->dsChuongBai->count()}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="{{ action('KhoaHocController@chiTietGiangVien' , $khoaHoc->giangVien->id) }}">{{ $khoaHoc->giangVien->ho_ten }}</a>

                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>

                                        </li>

                                    </ul>
                                    <ul>
                                        <li>
                                            <a href="/linh-vuc/{{$khoaHoc->LinhVuc->id}}"> {{ $khoaHoc->LinhVuc->ten_linh_vuc }}</a>
                                        </li>
                                        <li>
                                            <span>({{$khoaHoc->danhGiaKH->count()}}) Đánh giá</span>
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

@extends('layout')
@section('content')
@include('header')

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url({{ asset('assets/img/banner/19.jpg);') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Khóa học</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i>Trang Chủ</a></li>
                        <li><a href="#">Khóa Học</a></li>
                        <li class="active">Grid</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

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
                                            <a href="{{ action('KhoaHocController@chiTietGiangVien' , $khoaHoc->giangVien->id) }}">{{ $khoaHoc->giangVien->ho_ten }}</a>
                                            <a href="/linh-vuc/{{$khoaHoc->LinhVuc->id}}"> {{ $khoaHoc->LinhVuc->ten_linh_vuc }}</a>
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
    <!-- End Popular Courses -->
@endsection

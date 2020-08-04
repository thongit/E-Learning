@extends('layout')
<title>EDUQTTT - Khóa học của tôi</title>
@section('content')
@include('header')

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="container" style="font-size: large;">
        <a href="/">Trang chủ</a> &nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i>
        <a href="#">Khóa học của tôi</a>
    </div>
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12" style="">
                    <h2>Danh sách khóa học của tôi</h2>
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
                                        <a href="{{ action('KhoaHocController@chiTietGiangVien' , $khoaHoc->giangVien->id) }}">
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
                                                <a class="lam-gon-ten" style="display: -webkit-box;" href="{{ action('KhoaHocController@chiTietGiangVien' , $khoaHoc->giangVien->id) }}">@if($khoaHoc->nguoiDung->toChuc->count() > 0) {{ $khoaHoc->nguoiDung->toChuc[0]->ten_to_chuc }} @else {{$khoaHoc->giangVien->ho_ten }} @endif</a>

                                            </li>
                                            <li>
                                                @if($khoaHoc->danhGiaKH->count() != 0)
                                                    {{ round( ($khoaHoc->danhGiaKH->sum('so_sao') / $khoaHoc->danhGiaKH->count()), 1, PHP_ROUND_HALF_EVEN)}}
                                                @else
                                                    0
                                                @endif
                                                <i class="fas fa-star"></i>
                                            </li>

                                        </ul>
                                        <ul>
                                            <li>
                                                <a href="/linh-vuc/{{$khoaHoc->LinhVuc->id}}"> {{ $khoaHoc->LinhVuc->ten_linh_vuc }}</a>
                                            </li>
                                            <li>
                                                <span>({{$khoaHoc->danhGiaKH->count()}} đánh giá)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4>
                                        <a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $khoaHoc->id) }}" class="lam-gon-van-ban-mo-ta"> {{$khoaHoc->ten_khoa_hoc}}</a>
                                    </h4>
                                    <p class="lam-gon-van-ban-mo-ta">
                                        {{$khoaHoc->mo_ta_ngan }}
                                    </p>
                                    <div class="footer-meta">
                                        <h5 style="height: 20px">Tiến độ</h5>
                                        <div class="do-rong-tien-do">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" data-width="{{ $tienDo[$loop->index] }}">
                                                <span style="color: red;"> {{ $tienDo[$loop->index] }}% </span>
                                                </div>
                                            </div>
                                        </div>
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

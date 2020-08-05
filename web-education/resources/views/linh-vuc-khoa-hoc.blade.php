@extends('layout')
@section('content')
@include('header')
@if (session('success'))
<script>
    swal.fire("{{ session('success') }}","","success")
</script>
@endif
@if (session('error'))
<script>
    swal.fire("{{ session('error') }}","","error")
</script>
@endif
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Khóa học</h1>
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
                    @foreach($khoaHoc_linhVuc as $khoaHoc)

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
                                    <a class="btn btn-theme effect btn-sm" href="{{route('thanh-toan',$khoaHoc->id)}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Ghi danh</a>
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

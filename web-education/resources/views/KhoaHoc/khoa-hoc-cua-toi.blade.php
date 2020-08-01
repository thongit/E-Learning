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

    {{--  <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog left-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-12">
                      <div class="tab-content">
                        <div id="home1" class="tab-pane fade in active">
                          <div class="container-fluid adm-archivos">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <table class="table table-bordered table-hover vmiddle">
                                                <thead>
                                                    <tr>
                                                        <th>Hình ảnh khóa học</th>
                                                        <th>Tên khóa học</th>
                                                        <th>Tên giảng viên</th>
                                                        <th>Hình ảnh giảng viên</th>
                                                        <th>Tiến độ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach($hocVien->hoaDon as $dsHocVien)
                                                        @foreach($dsHocVien->ctHoaDon as $dsKhoaHoc)

                                                    <tr>
                                                        <td>

                                                            <img src="{{ asset('assets/images/'.$dsKhoaHoc->khoaHoc->hinh_anh) }}" alt="Thumb" width="100px" height="100px">
                                                        </td>
                                                        <td>{{$dsKhoaHoc->khoaHoc->ten_khoa_hoc}}</td>
                                                        <td>{{$dsKhoaHoc->khoaHoc->giangVien->ho_ten}}</td>
                                                        <td>
                                                            <img src="{{ asset('assets/images/'.$dsKhoaHoc->khoaHoc->giangVien->anh_dai_dien) }}" alt="Thumb" width="100px" height="height=100px">
                                                        </td>
                                                        <td>
                                                            @if(($dsKhoaHoc->tien_do) == 1)
                                                                Hoàn Thành
                                                            @endif
                                                            @if( ($dsKhoaHoc->tien_do) != 1)
                                                                Chưa Hoàn Thành
                                                            @endif
                                                        </td>
                                                     </tr>
                                                    @endforeach
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->  --}}


    <!-- Start Popular Courses
        ============================================= -->
        <div class="popular-courses-area weekly-top-items default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="top-course-items">
                        <!-- Single Item -->
                        @foreach($hocVien->hoaDon as $dsHocVien)
                            @foreach($dsHocVien->ctHoaDon as $dsKhoaHoc)
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item">
                                <div class="thumb">
                                    <img class="img-khoa-hoc" src="{{ asset('assets/images/'.$dsKhoaHoc->khoaHoc->hinh_anh) }}" alt="Thumb">
                                    <div class="overlay">
                                        <a href="{{ action('KhoaHocController@chiTietGiangVien' , $dsKhoaHoc->khoaHoc->giangVien->id) }}">
                                            <img src="{{ asset('assets/images/'.$dsKhoaHoc->khoaHoc->giangVien->anh_dai_dien) }}" alt="Thumb">
                                        </a>
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 04:15:38</li>
                                            <li><i class="fas fa-list-ul"></i> {{$dsKhoaHoc->khoaHoc->dsChuongBai->count()}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a class="lam-gon-ten" style="display: -webkit-box;" href="{{ action('KhoaHocController@chiTietGiangVien' , $dsKhoaHoc->khoaHoc->giangVien->id) }}">@if($dsKhoaHoc->khoaHoc->nguoiDung->toChuc->count() > 0) {{ $dsKhoaHoc->khoaHoc->nguoiDung->toChuc[0]->ten_to_chuc }} @else {{$dsKhoaHoc->khoaHoc->giangVien->ho_ten }} @endif</a>

                                            </li>
                                            <li>
                                                @if($dsKhoaHoc->khoaHoc->danhGiaKH->count() != 0)
                                                    {{ round( ($dsKhoaHoc->khoaHoc->danhGiaKH->sum('so_sao') / $dsKhoaHoc->khoaHoc->danhGiaKH->count()), 1, PHP_ROUND_HALF_EVEN)}}
                                                @else
                                                    0
                                                @endif
                                                <i class="fas fa-star"></i>
                                            </li>

                                        </ul>
                                        <ul>
                                            <li>
                                                <a href="/linh-vuc/{{$dsKhoaHoc->khoaHoc->LinhVuc->id}}"> {{ $dsKhoaHoc->khoaHoc->LinhVuc->ten_linh_vuc }}</a>
                                            </li>
                                            <li>
                                                <span>({{$dsKhoaHoc->khoaHoc->danhGiaKH->count()}} đánh giá)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4>
                                        <a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $dsKhoaHoc->khoaHoc->id) }}" class="lam-gon-van-ban-mo-ta"> {{$dsKhoaHoc->khoaHoc->ten_khoa_hoc}}</a>
                                    </h4>
                                    <p class="lam-gon-van-ban-mo-ta">
                                        {{$dsKhoaHoc->khoaHoc->mo_ta_ngan }}
                                    </p>
                                    <div class="footer-meta">
                                        <h5 style="height: 20px">Tiến độ</h5>
                                        <div class="do-rong-tien-do">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                50% hoàn thành
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @endforeach
                        <!-- Single Item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Popular Courses -->
@endsection

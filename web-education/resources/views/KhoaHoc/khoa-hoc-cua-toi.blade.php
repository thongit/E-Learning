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

    <!-- Start Blog
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
                                                            {{--  {{$dsKhoaHoc->khoaHoc->ten_khoa_hoc}}  --}}
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
    <!-- End Blog -->
@endsection

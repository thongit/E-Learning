@extends('layout')
<title>EDUQTTT - Quản lý khóa học</title>
@section('content')
@if (session('warning'))
    <script>
        swal.fire("{{ session('warning') }}","","warning")
    </script>
@endif
@if (session('success'))
    <script>
        swal.fire("{{ session('success') }}","","success")
    </script>
@endif
@include('header')

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="container" style="font-size: large;">
        <a href="/">Trang chủ</a> &nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i>
        <a href="">Danh sách đơn hàng</a>
    </div>
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12" style="">
                    <h2>Danh sách các đơn hàng</h2>
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
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#home1">Tất cả đơn hàng</a></li>
                        <li><a data-toggle="pill" href="#menu1">Đơn hàng đang mua</a></li>
                        <li><a data-toggle="pill" href="#menu2">Đơn hàng đang giao</a></li>
                        <li><a data-toggle="pill" href="#menu3"> Đơn hàng đã giao</a></li>
                      </ul><br>

                      <div class="tab-content">
                        <div id="home1" class="tab-pane fade in active">
                          <div class="container-fluid adm-archivos">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <table class="table table-bordered table-hover vmiddle">
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th style="text-align: center;">Hình ảnh khóa học</th>
                                                        <th style="text-align: center;">Tên khóa học</th>
                                                        <th style="text-align: center;">Giá</th>
                                                        <th style="text-align: center;">Tên giảng viên</th>
                                                        <th style="text-align: center;">Hìnhảnh giảng viên</th>
                                                        <th style="text-align: center;">Trạng thái</th>
                                                    </tr>
                                                </thead>
                                               <tbody>
                                                @foreach($hocVien->hoaDon as $dsHocVien)
                                                @foreach($dsHocVien->ctHoaDon as $dsKhoaHoc)
                                                   <tr>
                                                       <td>
                                                        <img src="{{ asset('assets/images/'.$dsKhoaHoc->khoaHoc->hinh_anh) }}" alt="Thumb" width="100px" height="100px">
                                                       </td>
                                                       <td><a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $dsKhoaHoc->khoaHoc->id) }}">{{$dsKhoaHoc->khoaHoc->ten_khoa_hoc}}</a></td>
                                                       <td>{{ number_format($dsKhoaHoc->khoaHoc->gia)}} VNĐ</td>
                                                       <td>{{$dsKhoaHoc->khoaHoc->giangVien->ho_ten}}</td>
                                                       <td>
                                                        <img src="{{ asset('assets/images/'.$dsKhoaHoc->khoaHoc->giangVien->anh_dai_dien) }}" alt="Thumb" width="100px" height="height=100px">
                                                        </td>
                                                        <td>
                                                            @if(($dsHocVien->trang_thai) == 1)
                                                            Đang Mua
                                                            @endif
                                                            @if(($dsHocVien->trang_thai) == 2)
                                                            Đang Giao
                                                            @endif
                                                            @if(($dsHocVien->trang_thai) == 3)
                                                            Đã Giao
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
                        <div id="menu1" class="tab-pane fade">
                          <div class="container-fluid adm-archivos">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <table class="table table-bordered table-hover vmiddle">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center;">Hình ảnh khóa học</th>
                                                        <th style="text-align: center;">Tên khóa học</th>
                                                        <th style="text-align: center;">Giá</th>
                                                        <th style="text-align: center;">Tên giảng viên</th>
                                                        <th style="text-align: center;">Hìnhảnh giảng viên</th>
                                                        <th style="text-align: center;">Trạng thái</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                 @foreach($hocVien->hoaDon as $dsHocVien)
                                                    @foreach($dsHocVien->ctHoaDon as $dsKhoaHoc)
                                                    @if(($dsHocVien->trang_thai) == 1)
                                                    <tr>
                                                        <td>
                                                         <img src="{{ asset('assets/images/'.$dsKhoaHoc->khoaHoc->hinh_anh) }}" alt="Thumb" width="100px" height="100px">
                                                        </td>
                                                        <td><a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $dsKhoaHoc->khoaHoc->id) }}">{{$dsKhoaHoc->khoaHoc->ten_khoa_hoc}}</a></td>
                                                        <td>{{ number_format($dsKhoaHoc->khoaHoc->gia)}} VNĐ</td>
                                                        <td>{{$dsKhoaHoc->khoaHoc->giangVien->ho_ten}}</td>
                                                        <td>
                                                         <img src="{{ asset('assets/images/'.$dsKhoaHoc->khoaHoc->giangVien->anh_dai_dien) }}" alt="Thumb" width="100px" height="height=100px">
                                                         </td>
                                                         <td>
                                                             @if(($dsHocVien->trang_thai) == 1)
                                                             Đang Mua
                                                             @endif
                                                         </td>
                                                    </tr>
                                                    @endif
                                                        @endforeach
                                                        @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                          <div class="container-fluid adm-archivos">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <table class="table table-bordered table-hover vmiddle">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center;">Hình ảnh khóa học</th>
                                                        <th style="text-align: center;">Tên khóa học</th>
                                                        <th style="text-align: center;">Giá</th>
                                                        <th style="text-align: center;">Tên giảng viên</th>
                                                        <th style="text-align: center;">Hìnhảnh giảng viên</th>
                                                        <th style="text-align: center;">Trạng thái</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach($hocVien->hoaDon as $dsHocVien)
                                                    @foreach($dsHocVien->ctHoaDon as $dsKhoaHoc)
                                                    @if(($dsHocVien->trang_thai) == 2)
                                                    <tr>
                                                        <td>
                                                         <img src="{{ asset('assets/images/'.$dsKhoaHoc->khoaHoc->hinh_anh) }}" alt="Thumb" width="100px" height="100px">
                                                        </td>
                                                        <td><a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $dsKhoaHoc->khoaHoc->id) }}">{{$dsKhoaHoc->khoaHoc->ten_khoa_hoc}}</a></td>
                                                        <td>{{ number_format($dsKhoaHoc->khoaHoc->gia)}} VNĐ</td>
                                                        <td>{{$dsKhoaHoc->khoaHoc->giangVien->ho_ten}}</td>
                                                        <td>
                                                         <img src="{{ asset('assets/images/'.$dsKhoaHoc->khoaHoc->giangVien->anh_dai_dien) }}" alt="Thumb" width="100px" height="height=100px">
                                                         </td>
                                                         <td>
                                                             @if(($dsHocVien->trang_thai) == 2)
                                                             Đang Giao
                                                             @endif
                                                         </td>
                                                    </tr>
                                                    @endif
                                                        @endforeach
                                                        @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                          <div class="container-fluid adm-archivos">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <table class="table table-bordered table-hover vmiddle">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center;">Hình ảnh khóa học</th>
                                                        <th style="text-align: center;">Tên khóa học</th>
                                                        <th style="text-align: center;">Giá</th>
                                                        <th style="text-align: center;">Tên giảng viên</th>
                                                        <th style="text-align: center;">Hìnhảnh giảng viên</th>
                                                        <th style="text-align: center;">Trạng thái</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach($hocVien->hoaDon as $dsHocVien)
                                                    @foreach($dsHocVien->ctHoaDon as $dsKhoaHoc)
                                                    @if(($dsHocVien->trang_thai) == 3)
                                                    <tr>
                                                        <td>
                                                         <img src="{{ asset('assets/images/'.$dsKhoaHoc->khoaHoc->hinh_anh) }}" alt="Thumb" width="100px" height="100px">
                                                        </td>
                                                        <td><a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $dsKhoaHoc->khoaHoc->id) }}">{{$dsKhoaHoc->khoaHoc->ten_khoa_hoc}}</a></td>
                                                        <td>{{ number_format($dsKhoaHoc->khoaHoc->gia)}} VNĐ</td>
                                                        <td>{{$dsKhoaHoc->khoaHoc->giangVien->ho_ten}}</td>
                                                        <td>
                                                         <img src="{{ asset('assets/images/'.$dsKhoaHoc->khoaHoc->giangVien->anh_dai_dien) }}" alt="Thumb" width="100px" height="height=100px">
                                                         </td>
                                                         <td>
                                                             @if(($dsHocVien->trang_thai) == 3)
                                                             Đã Giao
                                                             @endif
                                                         </td>
                                                    </tr>
                                                    @endif
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
    </div>
    <!-- End Blog -->
@endsection

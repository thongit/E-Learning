@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/12.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Thông tin giảng viên</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Advisor Details
    ============================================= -->
    <div class="advisor-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="advisor-info">
                    <!-- Start Thumbnail -->
                    <div class="col-md-5">
                        <div class="thumb">
                            <img src="{{ asset('assets/images/'.$nguoidungs->anh_dai_dien) }}" alt="Thumb">
                            <div class="info">
                                <h4>{{$nguoidungs->ho_ten}}</h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Thumbnail -->

                    <!-- Start Content -->
                    <div class="col-md-7 content">
                        <!-- Star Tab Info -->
                        <div class="tab-info">
                            <!-- Tab Nav -->
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                        Giới thiệu
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                        Khóa học
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                        Liên hệ
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
                                            {{$nguoidungs->gioi_thieu}}
                                        </p>
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab2" class="tab-pane fade">
                                    <div class="info title">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Tên khóa học</th>
                                                        <th>giá</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($khoahocs as $item)
                                                    <tr>
                                                        <td><a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $item->id) }}">{{$item->ten_khoa_hoc}}</a></td>
                                                        <td>{{number_format($item->gia)}}</td>
                                                    </tr>
                                                    @endforeach
                                                    <!-- chưa xong -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab3" class="tab-pane">
                                    <div class="info title">
                                        Email: {{$nguoidungs->email}}
                                    </div>
                                </div>
                                <!-- End Single Tab -->
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Tab Info -->

                    </div>
                    <!-- End Content -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Advisor Details -->
@endsection

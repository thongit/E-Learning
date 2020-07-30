@extends('layout')
<title>EDUQTTT - Giảng viên</title>
@section('content')
@include('header')
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="container" style="font-size: large;">
        <a href="/">Trang chủ</a> &nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i> 
        <a href="">Giảng viên</a>
    </div>
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12" style="">
                    <h2>Giảng viên</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Advisor
    ============================================= -->
    <div class="advisor-area bg-gray default-padding bottom-less bg-cover">
        <div class="container">
            <div class="row">
                <div class="advisor-items col-3 text-light text-center">

                    <!-- Single item -->
                    @foreach($giangviens as $gv)
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/'.$gv->anh_dai_dien) }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="{{ action('KhoaHocController@chiTietGiangVien' , $gv->id) }}">{{$gv->ho_ten}}</a></h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single item -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Advisor -->
@endsection

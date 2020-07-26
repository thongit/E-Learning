@extends('layout')
@section('content')
@include('header')
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/12.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Giảng Viên</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Advisor</a></li>
                        <li class="active">Grid</li>
                    </ul>
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
                                <span>PHP Expert</span>
                                <h4>{{$gv->ho_ten}}</h4>
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

@extends('layout')
<title>EDUQTTT - Chi tiết khóa học</title>
@section('content')
@include('header')
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<!-- <script src="{{ asset('assets/js/sweet-alerts.init.js') }}"></script> -->
<link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link href=" {{ asset ('assets/style.css') }}" rel="stylesheet">
<script>
    var DanhGia = {!! json_encode($ktdgkh) !!};
    function laydl(page)
    {
        $.ajax({
            url: '/lay-danh-gia?page='+page,
            method:"GET",
            data:{
                idKH: {{$dsKhoaHoc->id}},
                _token : '<?php echo csrf_token() ?>'
            },
            success:function(data){
                $(".dsdgkh").html(data);
            }
        });
    }

    $(document).on('click','.pagination a', function(e){
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        laydl(page);
    });

    $(document).ready(function(){
        if(DanhGia != null)
        {
            var $radios = $('input:radio[name=rating]');
            if($radios.is(':checked') === false) {
                $radios.filter('[value='+DanhGia.so_sao+']').prop('checked', true);
            }
            if(DanhGia.noi_dung == "")
            {
                $('#binh_luan').val(" ");
            }
            else
            {
                $('#binh_luan').val(DanhGia.noi_dung);
            }
            $('#binh_luan').prop("readonly",true);
            $('#guidanhgia').val("Bạn đã đánh giá cho khóa học này rồi!");
            $('#guidanhgia').prop("type","button");
        }
    });
</script>
<!-- Start Breadcrumb
    ============================================= -->
    <div class="container" style="font-size: large;">
        <a href="/">Trang chủ</a> &nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i>
        <a href="{{ route('trang-chu.khoa-hoc') }}">Danh sách khóa học</a>&nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i>
        <a href="">Chi tiết khóa học</a>
    </div>
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12" style="">
                    <h2>Chi tiết khóa học</h2>
                </div>
            </div>
        </div>
    </div>
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
    @if (session('thongbao'))
    <script>
        swal.fire("{{ session('thongbao') }}","","success")
    </script>
    @endif
    @if (session('loi'))
    <script>
        swal.fire("{{ session('loi') }}","","error")
    </script>
    @endif
    @if (session('warning'))
    <script>
        swal.fire("{{ session('warning') }}","","warning")
    </script>
    @endif
    @if (session('damua'))
    <script>
        Swal.fire('{{ session("damua") }}')
    </script>
    @endif
    <!-- End Breadcrumb -->

    <!-- Start Course Details
    ============================================= -->
    <div class="course-details-area default-padding">
        <div class="container">
            <div class="row">
                <!-- Start Course Info -->
                <div class="col-md-9">
                    <div class="courses-info">
                        <h2>
                            {{ $dsKhoaHoc->ten_khoa_hoc}}
                        </h2>
                        <div class="course-meta">
                            <div class="item author">
                                <div class="thumb">
                                    <a href="{{route('chi-tiet-giang-vien',$dsKhoaHoc->nguoi_dung_id)}}"><img alt="Thumb" src="{{ asset('assets/images/'.$dsKhoaHoc->giangVien->anh_dai_dien) }}"></a>
                                </div>
                               <div class="desc">
                                    <h4><a class="lam-gon-ten" style="width: 150px" href="{{route('chi-tiet-giang-vien',$dsKhoaHoc->nguoi_dung_id)}}">@if($dsKhoaHoc->nguoiDung->toChuc->count() > 0) {{ $dsKhoaHoc->nguoiDung->toChuc[0]->ten_to_chuc }} @else {{ $dsKhoaHoc->giangVien->ho_ten }} @endif</a></h4>
                                </div>
                            </div>
                            <div class="item category">
                                <h4>Mức Độ</h4>
                                <a href="#">{{ $dsKhoaHoc->muc_do }}</a>
                            </div>
                            <div class="item rating">
                                <h4>Đánh giá</h4>
                                {{ $ctDanhGia[5] }}
                                <i class="fas fa-star"></i>
                                <span>({{ sizeof($dsKhoaHoc->danhGiaKH) }} Đánh giá)</span>
                            </div>
                            <div class="item price">
                                <h4>Giá</h4>
                                <span>@if($dsKhoaHoc->gia != 0) {{ number_format($dsKhoaHoc->gia) }} VNĐ @else Miễn phí @endif</span>
                            </div>
                           @if($kiemtra == 0)
                            <div class="align-right">
                                <a class="btn btn-theme effect btn-sm" href="{{route('thanh-toan',$dsKhoaHoc->id)}}">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i> Ghi danh
                                </a>
                            </div>
                            @else
                            <div class="align-right">
                                <a class="btn btn-theme effect btn-sm">
                                <i class="fa fa-check-circle" aria-hidden="true"></i> Đã ghi danh
                                </a>
                            </div>
                            @endif
                        </div>
                        <img class="img-ct-khoa-hoc" src="{{asset('assets/images/'.$dsKhoaHoc->hinh_anh)}}" alt="Thumb">
                        <!-- Star Tab Info -->
                        <div class="tab-info">
                            <!-- Tab Nav -->
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                        Thông tin chung
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                        Giáo trình
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                       Giảng viên
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab4" aria-expanded="false">
                                        Xem Đánh giá
                                    </a>
                                </li>
                                @if($kiemtra == 1)
                                <li>
                                    <a data-toggle="tab" href="#tab5" aria-expanded="false">
                                       Tạo Đánh giá
                                    </a>
                                </li>
                                @endif
                            </ul>
                            <!-- End Tab Nav -->
                            <!-- Start Tab Content -->
                            <div class="tab-content tab-content-info">
                                <!-- Single Tab -->
                                <div id="tab1" class="tab-pane fade active in">
                                    <div class="info title">
                                        <p>
                                            {!! $dsKhoaHoc->mo_ta_chi_tiet !!}
                                        </p>
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->

                                <div id="tab2" class="tab-pane fade">
                                    <div class="info title">
                                        @if($kiemtra != 0)
                                        <div class=" ds-kiem-tra">
                                        <div class="align-right">
                                            <a class="btn btn-theme effect btn-sm" href="{{route('ds-bai-kiem-tra',$dsKhoaHoc->id)}}">
                                                <i class="fas fa-list"></i> Danh Sách Bài Kiểm Tra
                                            </a>
                                        </div>
                                        </div>
                                        @endif
                                        <h4>Danh Sách Bài Học</h4>
                                        @foreach($dsKhoaHoc->Chuong as $key => $dschuong)
                                        <!-- Start Course List -->
                                        <div class="course-list-items acd-items acd-arrow">
                                            <div class="panel-group symb" id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a style="display: flex;" data-toggle="collapse" data-parent="#accordion" href="#ac{{$dschuong->id}}">
                                                                <strong>{{$loop->index +1}}</strong>
                                                                {{ $dschuong->ten_chuong }}
                                                                @if($dschuong->baiKiemTra->count() > 0 )
                                                                <div class="access-type" style="display: flex; right: 40px; position: absolute;">
                                                                    <img src="{{asset('assets/img/quiz.png')}}" alt="Kiểm tra" style="width:20px;height:20px;">&nbsp Có bài kiểm tra
                                                                </div>
                                                                @endif
                                                            </a>


                                                        </h4>
                                                    </div>

                                                    <div id="ac{{ $dschuong->id }}" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ul>
                                                                @foreach($dschuong->noiDung as $dsBai)
                                                                <li>
                                                                    <div class="title" >
                                                                        <div class="asdas" style="display: contents;">
                                                                            <i class="fas fa-play-circle"></i>
                                                                            <!-- <i class="fas fa-file"></i> -->
                                                                            <p>
                                                                                Bài {{$key +1}}.{{$loop->index +1}}
                                                                            </p>
                                                                            <h5>
                                                                                <a class="lam-gon-ten" style="display: contents;" href="{{ route('video',$dsBai->id)}}">{{ $dsBai->tieu_de }}</a>
                                                                                @if($kiemtra==1 && (($td[0] > $dsBai->Chuong->id) || ($td[0] = $dsBai->Chuong->id && $td[1] >= $dsBai->id )))
                                                                                &nbsp&nbsp&nbsp
                                                                                <a class="btn btn-success">Đã học!</a>
                                                                                @endif
                                                                            </h5>
                                                                        </div>
                                                                        @if($loop->last && $dsBai->Chuong->baiKiemTra->count() > 0 )
                                                                        <div class="access-type" style="display: flex;">
                                                                           <img src="{{asset('assets/img/quiz.png')}}" alt="Kiểm tra" style="width:20px;height:20px;">
                                                                        &nbsp<a class="lam-gon-ten" href="{{ route('trac-nghiem-excel',$dsBai->Chuong->baiKiemTra[0]->file_de_kt)}}">{{$dsBai->Chuong->baiKiemTra[0]->ten_bai_kt}}</a>
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                    <div class="intro">
                                                                        <div class="item">
                                                                            <p>
                                                                                Phát hành - {{ $dsBai->created_at->diffForHumans() }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="item">
                                                                            <p>
                                                                                Thời gian: {{ gmdate("H:i:s", $time[$dsBai->id])}}
                                                                            </p>
                                                                           <a href="{{ route('video',$dsBai->id)}}">Bắt đầu</a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Course List -->

                                        @endforeach
                                    </div>
                                </div>

                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab3" class="tab-pane fade">
                                    <div class="info title">
                                        <div class="advisor-list-items">
                                            <!-- Advisor Item -->
                                            <div class="item">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/images/'.$dsKhoaHoc->giangVien->anh_dai_dien) }}" alt="Thumb">
                                                </div>
                                                <div class="info">
                                                    <div class="author">
                                                        <h4><a href="{{route('chi-tiet-giang-vien',$dsKhoaHoc->nguoi_dung_id)}}">@if($dsKhoaHoc->nguoiDung->toChuc->count() > 0) {{ $dsKhoaHoc->nguoiDung->toChuc[0]->ten_to_chuc }} @else {{ $dsKhoaHoc->giangVien->ho_ten }} @endif</a></h4>
                                                    </div>
                                                    <span class="designation">Email: @if($dsKhoaHoc->nguoiDung->toChuc->count() > 0) {{ $dsKhoaHoc->nguoiDung->toChuc[0]->emal_nlh }} @else {{ $dsKhoaHoc->giangVien->email }} @endif</span>
                                                    <br>
                                                    <span>
                                                    Số khóa học: {{$dsKhoaHoc->giangVien->khoaHoc->count()}}
                                                    </span>
                                                    <h5>
                                                    {{$dsKhoaHoc->giangVien->gioi_thieu}}
                                                    </h5>
                                                </div>
                                            </div>
                                            <!-- End Advisor Item -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab4" class="tab-pane fade">
                                    <div class="info title " id="show-danh-gia">
                                        <div class="course-rating-list">
                                            <div class="average-rating">
                                                <h3 style="font-size: xxx-large; font-weight: 500;">{{ $ctDanhGia[5] }} <i class="fas fa-star"></i></h3>
                                                <h4>{{ sizeof($dsKhoaHoc->danhGiaKH) }} đánh giá</h4>
                                            </div>
                                            <div class="rating-status">
                                                <!-- Progress Bar Start -->
                                                <div class="progress-box">
                                                    <h5>5 Sao <span class="pull-right">{{ $ctDanhGia[4] }}</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" data-width="{{$ctDanhGia[10]}}"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-box">
                                                    <h5>4 Sao <span class="pull-right">{{ $ctDanhGia[3] }}</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" data-width="{{ $ctDanhGia[9] }}"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-box">
                                                    <h5>3 Sao <span class="pull-right">{{ $ctDanhGia[2] }}</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" data-width="{{ $ctDanhGia[8] }}"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-box">
                                                    <h5>2 Sao <span class="pull-right">{{ $ctDanhGia[1] }}</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" data-width="{{ $ctDanhGia[7] }}"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-box">
                                                    <h5>1 Sao <span class="pull-right">{{ $ctDanhGia[0] }}</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" data-width="{{ $ctDanhGia[6] }}"></div>
                                                    </div>
                                                </div>
                                                <!-- End Progressbar -->
                                            </div>
                                        </div>
                                    </div>
                            <div class="dsdgkh">
                                @include('KhoaHoc.danhgia')
                            </div>
                        </div>
                                <!-- End Single Tab -->
                    @if($kiemtra == 1)
                    <div id="tab5" class="tab-pane fade">
                        <form action="{{ route('xu-ly-danh-gia',$dsKhoaHoc->id) }}" id="register-form" method="POST" class="white-popup-block" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="rating-danhgia">
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label>
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label>
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label>
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label>
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <input class="form-control" id="binh_luan" name="binh_luan" value="" placeholder="Bạn nghĩ thế nào về khóa học này?" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <input id="guidanhgia" class="btn btn-theme effect btn-sm" value="Gửi đánh giá" type="submit"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endif
                </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Tab Info -->
                    </div>
                </div>
                <!-- End Course Info -->

                <!-- Start Course Sidebar -->
                <div class="col-md-3">
                    <div class="aside">
                        <!-- Sidebar Item -->
                        <div class="sidebar-item course-info">
                            <div class="title">
                                <h4>Mô tả khóa học</h4>
                            </div>
                            <ul>
                                <li><i class="flaticon-translation"></i> Ngôn Ngữ  <span class="pull-right">{{ $dsKhoaHoc->ngon_ngu }}</span></li>
                                <li><i class="flaticon-faculty-shield"></i> Bài giảng  <span class="pull-right">{{ $dsKhoaHoc->dsChuongBai->count() }}</span></li>
                                <li><i class="flaticon-film"></i> Video  <span class="pull-right">{{$time[0]}}</span></li>
                                <li><i class="flaticon-levels"></i> Mức độ  <span class="pull-right">{{ $dsKhoaHoc->muc_do }}</span></li>
                                <li><i class="flaticon-group-of-students"></i> Học viên  <span class="pull-right">{{ sizeof($dsKhoaHoc->ctHoaDon) }}</span></li>
                            </ul>
                        </div>
                        <!-- End Sidebar Item -->
                        <!-- Sidebar Item -->
                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>Lĩnh vực</h4>
                            </div>
                            <ul>
                                @foreach ($dsLinhVuc as $lv)
                                <li>
                                    <a href="{{ route('linh-vuc',$lv->id) }}">{{$lv->ten_linh_vuc}} <span>{{$lv->khoaHoc->count()}}</span></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- End Sidebar Item -->
                        <!-- Sidebar Item -->
                        <div class="sidebar-item similar-courses">
                            <div class="title">
                                <h4>Khóa học tương tự</h4>
                            </div>
                            <ul>
                                @foreach($listKH as $kh)
                                <li style="border-bottom: 1px solid #e7e7e7;">
                                    <div class="thumb">
                                        <a href="{{ route('trang-chu.chi-tiet-khoa-hoc',$kh->id) }}">
                                            <img src="{{asset('assets/images/'.$kh->hinh_anh)}}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="{{ route('trang-chu.chi-tiet-khoa-hoc',$kh->id) }}">{{ $kh->ten_khoa_hoc }}</a>
                                        <label>@if($kh->gia != 0) {{ number_format($kh->gia) }} VNĐ @else Miễn phí @endif</label>
                                        <div class="meta">

                                            <div class="rating">
                                            @if($kh->danhGiaKH->count() != 0)
                                                {{ round( ($kh->danhGiaKH->sum('so_sao') / $kh->danhGiaKH->count()), 1, PHP_ROUND_HALF_EVEN)}}
                                            @else
                                                0
                                            @endif
                                                <i class="fas fa-star"></i>
                                            </div>
                                            ( {{$kh->danhGiaKH->count()}} đánh giá)
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- End Sidebar Item -->
                    </div>
                </div>
                <!-- End Course Sidebar -->
            </div>
        </div>
    </div>
    <!-- End Course Details -->

    <!-- Start Newsletter
    ============================================= -->
    <!-- <div class="newsletter-area fixed">
        <div class="container">
            <div class="subscribe-items shadow theme-hard default-padding bg-cover" style="background-image: url({{asset('assets/img/banner/11.jpg')}});">
                <div class="row">
                    <div class="col-md-7 left-info">
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info">
                                <h3>Subscribe to our newsletter</h3>
                                <p>
                                    Prospect humoured mistress to by proposal marianne attended. Simplicity the far admiration preference everything.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <form action="#">
                            <div class="input-group">
                                <input type="email" placeholder="Enter your e-mail here" class="form-control" name="email">
                                <button type="submit">
                                    Subscribe <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Newsletter -->
@endsection

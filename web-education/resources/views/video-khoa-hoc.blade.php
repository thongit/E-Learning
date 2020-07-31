@extends('layout')
<title>EDUQTTT - Bài giảng</title>
@section('content')
@include('header')
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
<link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

@if (session('alerterror'))
    <script>
        swal.fire("{{ session('alerterror') }}","","error")
    </script>
@endif
@if (session('thongbao'))
    <script>
        swal.fire("{{ session('thongbao') }}","","success")
    </script>
    @endif

    <!-- Start Breadcrumb
    ============================================= -->
    <!-- <div class="container" style="font-size: large;">
        <a href="/">Trang chủ</a> &nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i> 
        <a href="{{ route('sua') }}">Thông tin cá nhân</a>&nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i> 
    </div> -->
    <div class="container" style="font-size: large;">
        <a href="/">Trang chủ</a> &nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i> 
        <a href="{{ route('trang-chu.khoa-hoc') }}">Danh sách khóa học</a>&nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i> 
        <a  onclick="goBack()" >Chi tiết khóa học</a>&nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i> 
        <a href="">{{ $video->tieu_de }}</a>
    </div>
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12" style="">
                    <h2>{{ $video->tieu_de }}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>{{ $video->tieu_de }}</h1>
                </div>
            </div>
        </div>
    </div> -->
    <script>
function goBack() {
  window.history.back()
}
</script>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog left-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="{{ asset('assets/video/'.$video->video)}}" allowfullscreen></iframe>
                    </div>
                    <h4><a>{{$video->tieu_de}}</a></h4><hr>
                    <div class="panel panel-primary">
                      <ul class="list-group">
                        @if($video->Chuong->baiKiemTra->count() >0)
                        <li class="list-group-item">
                            <label>Bài kiểm tra: {{ $video->Chuong->baiKiemTra[0]->ten_bai_kt }}</label>
                            @if($kiemtra == null && $kiemtra1 == null)
                            <a href="{{ route('trac-nghiem-excel',$video->Chuong->baiKiemTra[0]->file_de_kt)}}" type="button" class="btn btn-info">Làm kiểm tra</a>                            
                            @else
                            <h4>Kết quả kiểm tra của bạn: {{$kiemtra->diem}}</h4>
                            @endif
                            @if($video->Chuong->baiKiemTra[0]->lam_lai == 1 && $kiemtra1 == null && $kiemtra != null)
                            <a href="{{ route('trac-nghiem-excel',$video->Chuong->baiKiemTra[0]->file_de_kt)}}" type="button" class="btn btn-warning">Làm lại bài kiểm tra</a>
                            @endif
                        </li>
                        @else
                        <li class="list-group-item">
                            <label>Bài kiểm tra: </label>
                            <h4>Không có bài kiểm tra</h4>
                        </li>
                        @endif
                        @if($video->tai_lieu != '_')
                        <li class="list-group-item">
                            <label>Tài liệu</label>
                            <h4><a href="{{ route('download',$video->id)}}">Tải file tài liệu về</a></h4>
                        </li>
                        @else
                        <li class="list-group-item">
                            <label>Tài liệu: </label>
                            <h4>Không có tài liệu</h4>
                        </li>
                        @endif
                    </ul>
                    </div>
                    <form action="{{ route('xu-ly-binh-luan',$video->id)}}" id="login-form" method="POST" class="white-popup-block">
                    @csrf
                    <div class="form-group">
                      <label for="usr">Bình luận</label>
                      <input type="text" class="form-control" id="noi_dung" name="noi_dung" required>
                      <button type="submit" class="btn btn-primary">
                          Gửi bình luận
                      </button>
                    </div>
                    </form>
                    @foreach($video->thaoLuan as $bl)
                    <article class="row">
                        <div class="col-md-2 col-sm-2 hidden-xs">
                            <figure class="thumbnail">
                                <img class="img-responsive" src="{{ asset('assets/images/'.$bl->nguoiDung->anh_dai_dien) }}" />
                            </figure>
                            </div>
                            <div class="col-md-10 col-sm-10">
                            <div class="panel panel-default arrow left">
                                <div class="panel-body">
                                    <h4>{{$bl->nguoiDung->ho_ten}}</h4>
                                <header class="text-left">
                                    <time class="comment-date">{{$bl->created_at->diffForHumans()}}
                                        <i class="fa fa-clock-o"></i></time>
                                </header>
                                <div class="comment-post">
                                    <label for="">{{$bl->noi_dung}}</label>
                                </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
                @foreach($video->Chuong->noiDung as $key => $chuong)
                <div class="col-md-4" style="border-left: 1px solid #e7e7e7;">
                    <br>
                    <a href="{{ route('video',$chuong->id)}}">
                        <div id="video-click">
                            <div class="embed-responsive embed-responsive-16by9"> 
                            <iframe class="embed-responsive-item" src="{{ asset('assets/video/'.$chuong->video)}}" allowfullscreen></iframe>
                                
                            </div>
                            <label for=""><a href="{{ route('video',$chuong->id)}}">{{$chuong->tieu_de}}</a></label>
                        </div>
                    </a>
                </div>
                @endforeach
                
            </div>
            </div>
        </div>
    <!-- End Blog -->
@endsection

@extends('layout')
@section('content')
@include('header')
@if (session('alerterror'))
    <script>
        swal.fire("{{ session('alerterror') }}","","error")
    </script>
@endif

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>{{ $video->tieu_de }}</h1>
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
                    <div class="form-group">
                      <label for="usr">Bình luận</label>
                      <input type="text" class="form-control" id="usr">
                      <button type="submit" class="btn btn-primary">
                          Gửi bình luận
                      </button>
                    </div>
                    <article class="row">
                        <div class="col-md-2 col-sm-2 hidden-xs">
                            <figure class="thumbnail">
                                <img class="img-responsive" src="https://hinhanhdephd.com/wp-content/uploads/2015/12/hinh-anh-dep-girl-xinh-hinh-nen-dep-gai-xinh.jpg" />
                            </figure>
                            </div>
                            <div class="col-md-10 col-sm-10">
                            <div class="panel panel-default arrow left">
                                <div class="panel-body">
                                    <h4>Nguyễn văn a</h4>
                                <header class="text-left">
                                    <time class="comment-date">2 ngày trước
                                        <i class="fa fa-clock-o"></i></time>
                                </header>
                                <div class="comment-post">
                                    <label for="">Video quá hay</label>
                                </div>
                                </div>
                            </div>
                        </div>
                    </article>
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

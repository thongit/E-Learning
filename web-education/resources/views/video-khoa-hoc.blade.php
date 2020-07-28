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
                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary">
                      <div class="panel-heading">NỘI DUNG</div>
                      <ul class="list-group">
                        @if($video->Chuong->baiKiemTra->count() >0)
                        <li class="list-group-item">
                            <label>Bài kiểm tra: {{ $video->Chuong->baiKiemTra[0]->ten_bai_kt }}</label>
                            @if($kiemtra == null && $kiemtra1 == null)
                            <a href="{{ route('trac-nghiem-excel',$video->Chuong->baiKiemTra[0]->file_de_kt)}}" type="button" class="btn btn-info">Làm kiểm tra</a>                            @else
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
                            <h4>{{$video->tai_lieu}}</h4>
                        </li>
                        @else
                        <li class="list-group-item">
                            <label>Tài liệu: </label>
                            <h4>Không có tài liệu</h4>
                        </li>
                        @endif
                    </ul>
                    </div>
                </div>
                @foreach($video->Chuong->khoaHoc->Chuong as $key => $chuong)
                <div class="col-md-12">
                    <br><div class="panel panel-info">
                    <div class="panel-heading">Chương {{ $key +1 }}: {{$chuong->ten_chuong}}</div>
                        <div class="panel-body">
                            @foreach ($chuong->noiDung as $bai)
                            <a href="{{ route('video',$bai->id)}}">
                                <div class="col-lg-4 col-md-12 mb-4" id="video-click">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        
                                            <iframe class="embed-responsive-item" src="{{ asset('assets/video/'.$bai->video)}}" allowfullscreen></iframe>
                                        
                                    </div>
                                    <label for=""><a href="{{ route('video',$bai->id)}}">{{$bai->tieu_de}}</a></label>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
        </div>
    <!-- End Blog -->
@endsection

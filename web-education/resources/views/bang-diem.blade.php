@extends('layout')
@section('content')
<title>EDUQTT - Bảng điểm</title>
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h2>Khóa học: {{$baikt->Chuong->khoaHoc->ten_khoa_hoc}}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div style="text-align: center">
        <h3>Chương: {{$baikt->Chuong->ten_chuong}}</h3>
    </div>
    <div class="blog-area single full-blog left-sidebar full-blog" style="margin-top:25px">
        <div class="container">
            <div class="row">
                <div style="display: flex; justify-content: flex-end;">
                    <a href="{{ route('export-bang-diem',$baikt->id) }}" class="btn btn-info btn-sm">Xuất file excel</a>
                </div>
                <div class="blog-items">
                    <div class="blog-content col-md-9" style="border-top: 1px solid;">
                    <h4 style="text-align: center">Bảng điểm bài kiểm tra: {{$baikt->ten_bai_kt}}</h4>
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Học viên</th>
                                <th>Điểm</th>
                                <th>Thời gian làm</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list as $item)
                            <tr>
                                <td style="vertical-align: inherit;">{{$loop->index+1}}</td>
                                <td style="    display: flex; align-items: center; padding-top: 0;"><img src="{{ asset('assets/images/'.$item->nguoiDung->anh_dai_dien) }}" class="thumbnail" style="border-radius: 50px; margin:0; margin-right:10px" width="50px" height="50px"> {{$item->nguoiDung->ho_ten}}</td>
                                <td style="vertical-align: inherit;">{{$item->diem}}</td>
                                <td style="vertical-align: inherit;">{{date_format($item->created_at, 'H:i:s, d/m/Y')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    @include('panel')
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection

@section('js')

@endsection

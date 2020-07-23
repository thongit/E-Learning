@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/19.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Tạo mô tả khóa học</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> ...</a></li>
                        <li><a href="#">...</a></li>
                        <li class="active">Tạo mô tả khóa học</li>
                    </ul>
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
                    <div class="blog-content col-md-8">
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif
                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <form method="post" action="{{ route('xl-tao-chuong',$khoahocs->id) }}">
                            {{ csrf_field() }}
                            <div class="panel panel-info">
                              <div class="panel-heading">Khóa học đang tạo</div>
                              <div class="panel-body">
                                {{$khoahocs->ten_khoa_hoc}}
                            </div>
                            </div>
                            <div id="inputFormRow">
                                <div>
                                    <label for="tenchuong">Tên chương 1</label>
                                    <input type="text" name="chuong1" class="form-control m-input" placeholder="Tên chương" required="">
                                </div>
                                <div id="newbaigiang"></div>
                            </div>
                            <br>
                            <button id="thembaigiang" type="button" class="btn btn-info">Thêm Chương</button>
                            <button type="submit" class="btn btn-success">Lưu lại</button>
                        </form>
                    </div>
                    @include('panel')
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection

@section('js')

<script type="text/javascript">
    var demChuong=2;
    $("#thembaigiang").click(function () {
        var html = '';
        html += '<br><div id="inputFormBaiGiang">';
        html += '<div>';
            html += '<label for="tenchuong">Tên chương '+demChuong+'</label>';
            html += '<input type="text" name="chuong'+demChuong+'" class="form-control m-input" placeholder="Tên chương" required="">';
        html += '</div>';
        html += '</div>';
        $('#newbaigiang').append(html);
        demChuong++;
    });
     $(document).on('click', '#xoabaigiang', function () {
        $(this).closest('#inputFormBaiGiang').remove();
    });
</script>
@endsection

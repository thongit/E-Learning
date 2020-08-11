@extends('layout')
<title>EDUQTTT - Danh sách khóa học</title>
@section('content')
@include('header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#mucDo").change(function(){
        timkiem();
    });
    $("#ngonNgu").change(function(){
        timkiem();
    });
    $("#sapXep").change(function(){
        timkiem();
    });
    $("#linhVuc").change(function(){
        timkiem();
    });

    function timkiem(){
        var mucdo = $("#mucDo").val();
        var ngonngu = $("#ngonNgu").val();
        var sapxep = $("#sapXep").val();
        var linhvuc = $("#linhVuc").val();
        var input = "";
        $.ajax({
            url:"{{ route('trang-chu.xu-ly-tim-kiem') }}",
            method:"GET",
            data:{
                mucdo:mucdo,
                ngonngu:ngonngu,
                sapxep:sapxep,
                linhvuc:linhvuc,
                input:input,  
                _token : '<?php echo csrf_token() ?>'
            },
            success:function(data){
                $(".dskh").html(data);
            }
        });
    };

    function laydl(page)
    {
        var mucdo = $("#mucDo").val();
        var ngonngu = $("#ngonNgu").val();
        var sapxep = $("#sapXep").val();
        var linhvuc = $("#linhVuc").val();
        var input = "";
        $.ajax({
            url: '/tim-kiem-nc?page='+page,
            method:"GET",
            data:{
                mucdo:mucdo,
                ngonngu:ngonngu,
                sapxep:sapxep,
                linhvuc:linhvuc,
                input:input,  
                _token : '<?php echo csrf_token() ?>'
            },
            success:function(data){
                $(".dskh").html(data);
            }
        });
    }

    $(document).on('click','.pagination a', function(e){
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        laydl(page);
    });
});
</script>
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="container" style="font-size: large;">
        <a href="/">Trang chủ</a> &nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i>
        <a href="{{ route('trang-chu.khoa-hoc') }}">Danh sách khóa học</a>
    </div>
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12" style="">
                    <h2>Danh sách khóa học</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <div class="container">
        <form id="search-form" class="new-added-form" action="{{ route('trang-chu.xu-ly-tim-kiem-nc') }}" method="GET">
            @csrf
            <div class="panel-group" style="padding-top: 10px">
                <div class="panel panel-primary">
                <div class="panel-heading"><h4 style="color:white">Lọc</h4></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <select class="form-control" id="linhVuc" data-dependent="linhVuc" name="linhVuc">
                                <option value="0">Lĩnh vực</option>
                                @foreach($dsLinhVuc as $linhVuc)
                                    <option value ="{{$linhVuc->id}}">{{ $linhVuc->ten_linh_vuc }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select class="form-control" id="mucDo" data-dependent="mucdo" name="chon">
                                <option>Mức độ</option>
                                <option>Sơ cấp</option>
                                <option>Trung cấp</option>
                                <option>Chuyên sâu</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select class="form-control" id="ngonNgu" data-dependent="ngonNgu" name="ngonNgu">
                                <option>Ngôn ngữ</option>
                                <option> Tiếng Anh</option>
                                <option>Tiếng Việt</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select class="form-control" id="sapXep" data-dependent="sapXep" name="sapXep">
                                <option>Sắp xếp</option>
                                <option value="1">Giá Giảm Dần</option>
                                <option value="2">Giá Tăng Dần</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
                
        </form>
    </div>
    <!-- Start Popular Courses
    ============================================= -->
    <div class="popular-courses-area weekly-top-items default-padding bottom-less">
        <div class="container dskh">
            @include('KhoaHoc.khoahoc')
        </div>
    </div>
    <!-- End Popular Courses -->
@endsection

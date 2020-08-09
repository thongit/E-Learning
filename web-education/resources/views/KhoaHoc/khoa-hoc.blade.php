@extends('layout')
<title>EDUQTTT - Danh sách khóa học</title>
@section('content')
@include('header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    function laydl(page)
    {
        $.ajax({
            url: '/khoa-hoc-pagin?page='+page,
            method:"GET",
            data:{
                _token : '<?php echo csrf_token() ?>'
            },
            success:function(data){
                console.log(data);
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

    <!-- Start Popular Courses
    ============================================= -->
    <div class="popular-courses-area weekly-top-items default-padding bottom-less">
        <div class="container dskh">
            @include('KhoaHoc.khoahoc')
        </div>
    </div>
    <!-- End Popular Courses -->
@endsection

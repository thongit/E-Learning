@extends('layout')
<title>EDUQTTT - Giảng viên</title>
@section('content')
@include('header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#ten").keyup(function(){
        timkiem();
    });

    function timkiem(){
        var ten = $("#ten").val();
        $.ajax({
            url:"/giang-vien",
            method:"GET",
            data:{
                ten:ten,
                _token : '<?php echo csrf_token() ?>'
            },
            success:function(data){
                $(".dsgv").html(data);
            }
        });
    };

    function laydl(page)
    {
        var ten = $("#ten").val();
        $.ajax({
            url: '/giang-vien-pagin?page='+page,
            method:"GET",
            data:{
                ten:ten,
                _token : '<?php echo csrf_token() ?>'
            },
            success:function(data){
                $(".dsgv").html(data);
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
    <div class="container">
        <form id="search-form" class="new-added-form" action="{{ route('trang-chu.xu-ly-tim-kiem-nc') }}" method="GET">
            @csrf
            <div class="panel-group" style="padding-top: 10px">
                    <div class="row">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </span>	
                            <input id="ten" class="form-control" aria-label="Tìm kiếm" placeholder="Tìm kiếm">
                        </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Start Advisor
    ============================================= -->
    <div class="advisor-area bg-gray default-padding bottom-less bg-cover">
        <div class="container dsgv">
            @include('giangvien')
        </div>
    </div>
    <!-- End Advisor -->
@endsection

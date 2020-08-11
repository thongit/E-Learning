@extends('layout')
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
    $("#ten").keyup(function(){
        timkiem();
    });

    function timkiem(){
        var mucdo = $("#mucDo").val();
        var ngonngu = $("#ngonNgu").val();
        var sapxep = $("#sapXep").val();
        var linhvuc = {{$linhVuc->id}};
        var input = $("#ten").val();
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
        var linhvuc = {{ $linhVuc->id }};
        var input = $("#ten").val();
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
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>{{$linhVuc->ten_linh_vuc}}</h1>
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
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" id="mucDo" data-dependent="mucdo" name="chon">
                            <option>Mức độ</option>
                            <option>Sơ cấp</option>
                            <option>Trung cấp</option>
                            <option>Chuyên sâu</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" id="ngonNgu" data-dependent="ngonNgu" name="ngonNgu">
                            <option>Ngôn ngữ</option>
                            <option> Tiếng Anh</option>
                            <option>Tiếng Việt</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" id="sapXep" data-dependent="sapXep" name="sapXep">
                            <option>Sắp xếp</option>
                            <option value="1">Giá Giảm Dần</option>
                            <option value="2">Giá Tăng Dần</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group col-md-12" style="padding-right:15px">
                        <span class="input-group-addon">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </span>	
                        <input id="ten" class="form-control" aria-label="Tìm kiếm" placeholder="Tìm kiếm">
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

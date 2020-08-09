@extends('layout')
@section('content')
@include('header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    function laydl(page)
    {
        var url = $(location).attr('href');
        var id = url.split('linh-vuc/')[1];
        console.log(id);
        $.ajax({
            url: '/linh-vuc-pagin?page='+page,
            method:"GET",
            data:{
                _token : '<?php echo csrf_token() ?>',
                id : id
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
                    <h1>Khóa học</h1>
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

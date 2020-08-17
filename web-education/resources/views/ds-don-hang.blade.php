@extends('layout')
<title>EDUQTTT - Quản lý khóa học</title>
@section('content')
@if (session('warning'))
    <script>
        swal.fire("{{ session('warning') }}","","warning")
    </script>
@endif
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
@include('header')
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
<link href="http://vjs.zencdn.net/5.7.1/video-js.css" rel="stylesheet">
<link href="https://unpkg.com/@videojs/themes@1/dist/fantasy/index.css" rel="stylesheet">
<link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style>
    .blog-area .pagination li a{
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        color: #337ab7;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #ddd;
        margin-right: 1px;
    }
    </style>
<script>
$(document).ready(function(){

    $(document).on('click','.pagination a', function(e){
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        layDonHang(page);
    });

    function layDonHang(page)
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/lay-don-hang?page='+page,
            type:"GET",
            success:function(data){
                console.log(data);
                $(".dsdh").html(data);
            }
        });
    }


});
</script>

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="container" style="font-size: large;">
        <a href="/">Trang chủ</a> &nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i>
        <a href="">Danh sách đơn hàng</a>
    </div>
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12" style="">
                    <h2>Danh sách các đơn hàng</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog left-sidebar full-blog default-padding">
        <div class="container dsdh">
            @include('don-mua-hang')
        </div>
    </div>
    <!-- End Blog -->
@endsection

<script>
    function thongbaoxoa($id) {
        Swal.fire({
            title: 'Bạn có Muốn Xóa Không?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok. Xóa nó!',
            cancelButtonText:'Không'
            }).then((result) => {
            if (result.value) {
                $url='/don-hang/xoa/'+$id;
                open($url,"_self")
            }
        })
    }
    </script>

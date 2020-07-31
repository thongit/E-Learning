@extends('layout')
<title>EDUQTTT - Quản lý bài kiểm tra</title>
@section('content')
@if (session('success'))
    <script>
        swal.fire("{{ session('success') }}","","success")
    </script>
@endif
@if (session('success'))
    <script>
        swal.fire("{{ session('success') }}","","success")
    </script>
@endif
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="container" style="font-size: large;">
        <a href="/">Trang chủ</a> &nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i> 
        <a href="{{ route('dskhdt') }}">Quản lý khóa học</a> &nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i> 
        <a href="">Quản lý bài kiểm tra</a>
    </div>
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12" style="color: white; font-size: x-large;">
                    <h2>Khóa học: {{$khoahoc->ten_khoa_hoc}}</h2>
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

                    <div class="blog-content col-md-9">
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên chương</th>
                                <th>Tên bài kiểm tra</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i< sizeof($dsBaiKT); $i++)
                            <tr>
                                <td>{{$i +1}}</td>
                                <td> {{$dsBaiKT[$i]->Chuong->ten_chuong}} </td>
                                <td>{{$dsBaiKT[$i]->ten_bai_kt}}</td>
                                <td>
                                    <button onclick="xoa({{$dsBaiKT[$i]->id}})" type="button" class="btn btn-danger btn-sm">Xóa</button>
                                </td>
                                <td>
                                    <button onclick="sua({{$dsBaiKT[$i]->id }})" type="button" class="btn btn-primary btn-sm">Sửa</button>
                                </td>
                                <td>
                                    <button onclick="xuat({{$dsBaiKT[$i]->id}})" type="button" class="btn btn-info btn-sm" >Xuất file</button>
                                </td>
                            </tr>
                            @endfor
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

<script>
function xoa($id) {
    Swal.fire({
    title: 'Xóa bài kiểm tra sẽ xóa hết các bài làm của học viên trong bài kiểm tra này! Bạn có chắc chắn xóa?',
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Có',
    cancelButtonText:'Không'
    }).then((result) => {
        if (result.value) {
            $url='/xoa-bai-kt/'+$id;
            open($url,"_self")
        }
    })
};

function sua($id) {
    Swal.fire({
    title: 'Bạn có chắc muốn sửa?',
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Có',
    cancelButtonText:'Không'
    }).then((result) => {
        if (result.value) {
            $url='/sua-cau-hoi-excel/'+$id;
            open($url,"_self")
        }
    })
};

function xuat($id) {
    Swal.fire({
    title: 'Bạn có chắc muốn xuất file?',
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Có',
    cancelButtonText:'Không'
    }).then((result) => {
        if (result.value) {
            $url='/export-file/'+$id;
            open($url,"_self")
        }
    })
};
</script>

@section('js')

@endsection

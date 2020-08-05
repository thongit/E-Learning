@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Quản lý đơn hàng</h1>
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
                                <th>Ảnh khóa học</th>
                                <th>Tên khóa học</th>
                                <th>Tên học viên</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Tổng tiền</th>
                                <th>Mã kích hoạt</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cthoadons as $item)
                            @if($item->khoaHoc->nguoi_dung_id==$giangviens->id)
                        <tr>
                            <td class="text-center"><img src="{{ asset('assets/images/'.$item->khoaHoc->hinh_anh) }}" class="thumbnail" width="60px" height="50px"></td>
                            <td>{{$item->khoaHoc->ten_khoa_hoc}}</td>
                            <td>{{$item->hoaDon->nguoiDung->ho_ten}}</td>
                            <td>{{$item->hoaDon->nguoiDung->dia_chi}}</td>
                            <td>{{$item->hoaDon->nguoiDung->sdt}}</td>
                            <td>{{number_format($item->hoaDon->tong_tien)}}VND</td>
                            <td>{{$item->ma_kich_hoat}}</td>
                            <td>@if($item->trang_thai == 3)            
                                <button type="submit" class="btn btn-success">Đã thanh toán</button> 
                                @endif   
                                @if($item->trang_thai == 1)                           
                                <button type="submit" class="btn btn-danger" onclick="thongbaoxoa({{$item->id}})">Đang mua</button>
                                @endif
                                @if($item->trang_thai == 2)                           
                                <button type="submit" class="btn btn-info">Đang giao</button>
                                @endif
                                 </td>
                        </tr>
                        @endif
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
    <script>
function thongbaoxoa($id) {
    Swal.fire({
        title: 'Đang giao hàng',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok. Đang giao!',
        cancelButtonText:'Không'
        }).then((result) => {
        if (result.value) {
            Swal.fire(
            'Thành công!',
            'Bạn đã thay đổi thành công.',
            'success'
            )
            $url='/giang-vien/quan-ly-don-hang/'+$id;
            open($url,"_self") 
        }
    })
}
</script>
@endsection

@section('js')

@endsection

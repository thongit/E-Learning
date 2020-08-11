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
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#a">Danh sách đơn hàng đang mua</a></li>
                            <li><a data-toggle="tab" href="#b">Danh sách đơn hàng đang giao</a></li>
                            <li><a data-toggle="tab" href="#c">Danh sách đơn hàng đã thanh toán</a></li>
                          </ul>

                          <div class="tab-content">
                            <div id="a" class="tab-pane fade in active">
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
                                    @if($item->hoaDon->trang_thai == 1)
                                <tr>
                                    <td class="text-center"><img src="{{ asset('assets/images/'.$item->khoaHoc->hinh_anh) }}" class="thumbnail" width="60px" height="50px"></td>
                                    <td><a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $item->khoaHoc->id) }}">{{$item->khoaHoc->ten_khoa_hoc}}</a></td>
                                    <td>{{$item->hoaDon->nguoiDung->ho_ten}}</td>
                                    <td>{{$item->hoaDon->nguoiDung->dia_chi}}</td>
                                    <td>{{$item->hoaDon->nguoiDung->sdt}}</td>
                                    <td>{{number_format($item->hoaDon->tong_tien)}}VND</td>
                                    <td>{{$item->ma_kich_hoat}}</td>
                                    <td>                              
                                        <button type="submit" class="btn btn-danger" onclick="thongbaoxoa({{$item->id}})">Đang mua</button>
                                    </td>
                                </tr>
                                @endif
                                @endif
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                            <div id="b" class="tab-pane fade">
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
                                    @if($item->hoaDon->trang_thai == 2)
                                <tr>
                                    <td class="text-center"><img src="{{ asset('assets/images/'.$item->khoaHoc->hinh_anh) }}" class="thumbnail" width="60px" height="50px"></td>
                                    <td><a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $item->khoaHoc->id) }}">{{$item->khoaHoc->ten_khoa_hoc}}</a></td>
                                    <td>{{$item->hoaDon->nguoiDung->ho_ten}}</td>
                                    <td>{{$item->hoaDon->nguoiDung->dia_chi}}</td>
                                    <td>{{$item->hoaDon->nguoiDung->sdt}}</td>
                                    <td>{{number_format($item->hoaDon->tong_tien)}}VND</td>
                                    <td>{{$item->ma_kich_hoat}}</td>
                                    <td>@if($item->trang_thai == 3)            
                                        <button type="submit" class="btn btn-success">Đã thanh toán</button> 
                                        @endif                            
                                        <button type="submit" class="btn btn-info">Đang giao</button>
                                         </td>
                                </tr>
                                @endif
                                @endif
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                            <div id="c" class="tab-pane fade">
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
                                    @if($item->hoaDon->trang_thai == 3)
                                <tr>
                                    <td class="text-center"><img src="{{ asset('assets/images/'.$item->khoaHoc->hinh_anh) }}" class="thumbnail" width="60px" height="50px"></td>
                                    <td><a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $item->khoaHoc->id) }}">{{$item->khoaHoc->ten_khoa_hoc}}</a></td>
                                    <td>{{$item->hoaDon->nguoiDung->ho_ten}}</td>
                                    <td>{{$item->hoaDon->nguoiDung->dia_chi}}</td>
                                    <td>{{$item->hoaDon->nguoiDung->sdt}}</td>
                                    <td>{{number_format($item->hoaDon->tong_tien)}}VND</td>
                                    <td>{{$item->ma_kich_hoat}}</td>
                                    <td>           
                                        <button type="submit" class="btn btn-success">Đã thanh toán</button>
                                    </td>                           
                                </tr>
                                @endif
                                @endif
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                          </div>

                     
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

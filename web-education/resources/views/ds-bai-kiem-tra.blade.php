@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Danh Sách Bài Kiểm Tra Của Khóa học</h1>
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
                        <h1 style="margin-top: 0px;margin-bottom: 4%;">{{$khoaHoc->ten_khoa_hoc}}</h1>
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Tên chương</th>
                                <th>Tên bài kiểm tra</th>
                                <th>Thời gian</th>
                                <th>Điểm</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($khoaHoc->Chuong as $dsChuong)
                              @foreach($dsChuong->baiKiemTra as $dsBaiKtra)
                            <tr>
                                <td>{{$dsChuong->ten_chuong}}</td>

                                <td>{{$dsBaiKtra->ten_bai_kt}}</td>
                                @if($dsBaiKtra->ketQuaKT->count() > 0)
                                    @foreach($dsBaiKtra->ketQuaKT as $dsKetQua)
                                        @if($dsKetQua->nguoi_dung_id == $idNguoiDung)
                                            <td>{{$dsKetQua->created_at}}</td>
                                            <td>{{$dsKetQua->diem}}</td>
                                            @break;
                                        @endif
                                        @if($loop->last && ($dsKetQua->nguoi_dung_id != $idNguoiDung))
                                            <td>Chưa làm</td>
                                            <td>Chưa làm</td>
                                         @endif
                                    @endforeach

                                @else
                                    <td>Chưa làm</td>
                                    <td>Chưa làm</td>
                                @endif
                            </tr>
                        @endforeach
                        @endforeach

                        </tbody>
                    </table>
                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-3">
                        <aside>
                            <div class="single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/images/'.Auth::user()->anh_dai_dien) }}" class="thumbnail">
                                    </div>
                                    <div class="info">
                                        <h4 style="text-align: center;padding-bottom: 10px">{{ Auth::user()->ho_ten }}</h4>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
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

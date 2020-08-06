@extends('layout-admin')
@section('content-admin')

<div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Đăng ký giảng viên</h3>
                    <ul>
                        <li>Danh sách đăng ký giảng viên cá nhân</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Ảnh đại diện</th>
                                        <th>Họn tên</th>
                                        <th>Email</th>
                                        <th>CMND</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ</th>
                                        <th>Ngày lập</th>
                                        <th>Trạng thái</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @foreach($danhSachGiangVienCaNhan as $item)
                                        <td class="text-center"><img src="{{ asset('assets/images/'.$item->anh_dai_dien) }}" width="50px" height="50px"></td>
                                        <td>{{$item->ho_ten}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->cmnd}}</td>
                                        <td>{{$item->sdt}}</td>
                                        <td>{{$item->dia_chi}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <button type="submit" class="btn btn-success" 
                                            onclick="thongbaoduyet({{$item->id}})">Phê duyệt
                                            </button>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-danger">xóa</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">QTTT</a>
                    </div>
                </footer>
            </div>
<script>
function thongbaoduyet($id) {
    Swal.fire({
        title: 'Bạn có thay đổi Không?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok. Thay đổi!',
        cancelButtonText:'Không'
        }).then((result) => {
        if (result.value) {
            Swal.fire(
            'Thành công!',
            'Bạn đã thay đổi thành công.',
            'success'
            )
            $url='/admin/ds-giang-vien-ca-nhan/'+$id;
            open($url,"_self")
        }
    })
}
</script>
@endsection
@extends('layout-admin')
@section('content-admin')

<div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Đăng ký giảng viên</h3>
                    <ul>
                        <li>Danh sách đăng ký giảng viên tổ chức</li>
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
                                        <th>Tên tổ chức</th>
                                        <th>Mã số thuế</th>
                                        <th>Địa chỉ</th>
                                        <th>Người liên hệ</th>
                                        <th>Email người liên hệ</th>
                                        <th>Số điện thoại người liên hệ</th>
                                        <th>Tên người đăng ký</th>
                                        <th>Trạng thái</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @foreach($danhSachGiangVienToChuc as $item)
                                        <td>{{$item->ten_to_chuc}}</td>
                                        <td>{{$item->ma_so_thue}}</td>
                                        <td>{{$item->dia_chi}}</td>
                                        <td>{{$item->nguoi_lien_he}}</td>
                                        <td>{{$item->emal_nlh}}</td>
                                        <td>{{$item->sdt_nlh}}</td>
                                        <td></td>
                                        <td>
                                            <button type="submit" class="btn btn-success" 
                                            onclick="thongbaoduyet({{$item->id}})">Phê duyệt
                                            </button></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div style="display: flex;justify-content: center;">
                    <?php echo $danhSachGiangVienToChuc->render(); ?>
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
            $url='/admin/ds-giang-vien-to-chuc/'+$id;
            open($url,"_self")
        }
    })
}
</script>
@endsection
@extends('layout-admin')
@section('content-admin')
<div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Giảng viên</h3>
                    <ul>
                        <li>Tất cả giảng viên</li>
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
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @foreach($danhSachGiangVien as $item)
                                        <td class="text-center"><img src="{{ asset('assets/images/'.$item->anh_dai_dien) }}" width="50px" height="50px"></td>
                                        <td><a href="{{route('admin-ds-khoa-hoc-giang-vien',$item->id)}}">{{$item->ho_ten}}</a></td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->cmnd}}</td>
                                        <td>{{$item->sdt}}</td>
                                        <td>{{$item->dia_chi}}</td>
                                        <td>{{$item->created_at}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div style="display: flex;justify-content: center;">
                    <?php echo $danhSachGiangVien->render(); ?>
                </div>
                <!-- Student Table Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">QTTT</a>
                    </div>
                </footer>
            </div>
@endsection
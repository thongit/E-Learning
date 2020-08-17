@extends('layout-admin')
@section('content-admin')
<div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Admin Dashboard</h3>
                    <ul>
                        <li>
                            <a href="/admin/thong-ke">Home</a>
                        </li>
                        <li>Admin</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->

                <!-- Dashboard summery Start Here -->
                <div class="row gutters-20">
                    <div class="col-xl-4 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-green ">
                                        <i class="flaticon-classmates text-green"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Tổng số học viên</div>
                                        <div class="item-number"><span class="counter" data-num="{{ ($tongHocVien) }}">{{ ($tongHocVien) }}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-blue">
                                        <i class="flaticon-multiple-users-silhouette text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Giảng viên</div>
                                        <div class="item-number"><span class="counter" data-num="{{$danhSachGiangVien}}">{{$danhSachGiangVien}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-yellow">
                                        <i class="flaticon-couple text-orange"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Khóa học</div>
                                        <div class="item-number"><span class="counter" data-num="{{$danhSachKhoaHoc}}">{{$danhSachKhoaHoc}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dashboard summery End Here -->

                {{--  Chọn ngày tháng thống kê Start Here  --}}

                <form class="mg-b-20" action="{{ route('thong-ke')}}" method="GET">
                    <div class="row gutters-8">
                        <div class="col-4-xxxl col-xl-4 col-lg-4 col-12 form-group">
                            <label for="bdaymonth">Chọn Tháng Thống Kê:</label>
                        </div>
                        @if($hienThiThang == null)
                        <div class="col-4-xxxl col-xl-4 col-lg-4 col-12 form-group">
                            <input type="month" id="bdaymonth" name="bdaymonth" value="{{$layNgayThang}}" required>
                        </div>
                        @else
                        <div class="col-4-xxxl col-xl-4 col-lg-4 col-12 form-group">
                            <input type="month" id="bdaymonth" name="bdaymonth" value="{{$hienThiThang}}" required>
                        </div>
                        @endif
                        <div class="col-4-xxxl col-xl-4 col-lg-4 col-2 form-group">
                            <button type="submit" class="fw-btn-fill btn-gradient-yellow">Thống Kê</button>
                        </div>
                        {{--  <div class="col-5-xxxl col-xl-4 col-lg-2 col-4 form-group">

                        </div>  --}}
                    </div>
                </form>
                {{--  Chọn ngày tháng thống kê End Here  --}}

                <!-- Dashboard summery Start Here -->
                <div class="row gutters-20">
                    <div class="col-xl-6 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-green ">
                                        <i class="flaticon-classmates text-green"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Số lượng học viên đăng kí trong tháng</div>
                                        <div class="item-number"><span class="counter" data-num="{{$slHocVienThang}}">{{$slHocVienThang}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-green ">
                                        <i class="flaticon-classmates text-green"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Số lượng giảng đăng kí trong tháng</div>
                                        <div class="item-number"><span class="counter" data-num="{{$slGiangVienThang}}">{{$slGiangVienThang}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dashboard summery End Here -->
                <!-- Dashboard summery Start Here -->
                <div class="row gutters-20">
                    <div class="col-xl-6 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-red">
                                        <i class="flaticon-money text-red"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Doanh thu trong tháng Của Admin</div>
                                        <div class="item-number"><span>{{number_format($doanhThuThangAd)}} VNĐ</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-red">
                                        <i class="flaticon-money text-red"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Tổng doanh thu của Admin</div>
                                        <div class="item-number"><span>{{ number_format($tongDoanhThuAd) }} VNĐ</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dashboard summery End Here -->
                <!-- Footer Area Start Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">QTTT</a> 2020. Đã đăng kí bản quyền. Thiết kế bởi <a
                            href="#">QTTT</a></div>
                </footer>
                <!-- Footer Area End Here -->
            </div>
@endsection

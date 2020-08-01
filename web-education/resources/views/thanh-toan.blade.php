@extends('layout')
@section('content')
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
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Thanh toán</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Popular Courses
    ============================================= -->
    <div class="popular-courses-area weekly-top-items default-padding bottom-less">
        <div class="container">
            <div class="row">
                <h3>Chọn hình thức thanh toán:</h3>
                <div class="col-md-8">
                  <ul class="nav nav-pills">
                    <li class="active"><a data-toggle="pill" href="#a"><h4 style="color:inherit">Thanh toán khi nhận mã</h4></a></li>
                    <li><a data-toggle="pill" href="#b"><h4 style="color:inherit">Thanh toán VNPAY</h4></a></li>
                  </ul>
                  
                  <div class="tab-content">
                    <div id="a" class="tab-pane fade in active">
                      <div class="panel panel-primary">
                        <div class="panel-heading">Thông tin thanh toán</div>
                        <div class="panel-body">
                          <form action="{{route('xl-thanh-toan')}}" method="POST"  role="form">
                          {!! csrf_field() !!}
                          <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input value="{{auth()->user()->dia_chi}}" type="text" class="form-control" name="DiaChi" required>
                          </div>
                          <div class="form-group">
                            <label for="">Email</label>
                            <input value="{{auth()->user()->email}}" type="email" class="form-control" name="SoDienThoai" required>
                          </div>
                          <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input value="{{auth()->user()->sdt}}" type="number" class="form-control" name="SoTien" required>
                          </div>
                          <div class="form-group">
                            <label for="">Ghi chú</label>
                            <input type="text" class="form-control" name="GhiChu" required>
                          </div>
                          <div class="vnpay-tt">
                            <input value="{{$khoaHoc->id}}" type="hidden" class="form-control" name="khoaHocID" required readonly>
                          </div>
                          <button value="thuong" name="thanhtoan" type="submit" class="btn btn-primary">
                              Xác nhận thanh toán
                          </button>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div id="b" class="tab-pane fade">
                      <div class="panel panel-primary">
                        <div class="panel-heading">Thông tin thanh toán</div>
                        <div class="panel-body">
                          <form action="{{route('xl-thanh-toan')}}" method="post" role="form">
                          {!! csrf_field() !!}
                          <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input value="{{auth()->user()->dia_chi}}" type="text" class="form-control" name="DiaChi" required>
                          </div>
                          <div class="form-group">
                            <label for="">Email</label>
                            <input value="{{auth()->user()->email}}" type="email" class="form-control" name="Email" required>
                          </div>
                          <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input value="{{auth()->user()->sdt}}" type="number" class="form-control" name="SoDienThoai" required>
                          </div>
                          <div id="vnpay">
                          <input value="{{$khoaHoc->id}}" type="hidden" class="form-control" name="khoaHocID" required readonly>
                          </div>
                          <div class="form-group">
                            <label for="">Số tiền</label>
                            <input type="text" value="{{$khoaHoc->gia}}" class="form-control" name="amount" readonly>
                          </div>
                          <div class="form-group">
                          <label for="bank_code">Ngân hàng</label>
                          <select name="BankCode">
                              <option value="NCB"> Ngan hang NCB</option>
                              <option value="AGRIBANK"> Ngan hang Agribank</option>
                              <option value="SCB"> Ngan hang SCB</option>
                              <option value="SACOMBANK">Ngan hang SacomBank</option>
                              <option value="EXIMBANK"> Ngan hang EximBank</option>
                              <option value="MSBANK"> Ngan hang MSBANK</option>
                              <option value="NAMABANK"> Ngan hang NamABank</option>
                              <option value="VNMART"> Vi dien tu VnMart</option>
                              <option value="VIETINBANK">Ngan hang Vietinbank</option>
                              <option value="VIETCOMBANK"> Ngan hang VCB</option>
                              <option value="HDBANK">Ngan hang HDBank</option>
                              <option value="DONGABANK"> Ngan hang Dong A</option>
                              <option value="TPBANK"> Ngân hàng TPBank</option>
                              <option value="OJB"> Ngân hàng OceanBank</option>
                              <option value="BIDV"> Ngân hàng BIDV</option>
                              <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                              <option value="VPBANK"> Ngan hang VPBank</option>
                              <option value="MBBANK"> Ngan hang MBBank</option>
                              <option value="ACB"> Ngan hang ACB</option>
                              <option value="OCB"> Ngan hang OCB</option>
                              <option value="IVB"> Ngan hang IVB</option>
                              <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                          </select>
                          </div>
                          <div class="form-group">
                            <label for="">Ngôn ngữ</label>
                            <select name="NgonNgu" id="">
                              <option value="vn">Tiếng Việt</option>
                              <option value="en">English</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="">Ghi chú</label>
                            <input type="text" class="form-control" name="GhiChu" required="">
                          </div>
                          <button value="vnp" name="thanh_toan_vnpay" type="submit" class="btn btn-primary">
                              Xác nhận thanh toán VNPAY
                          </button>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
                <div class="col-md-4">
                    <div class="panel panel-primary">
                      <div class="panel-heading"><h4 style="color:inherit">Thông tin khóa học</h4></div>
                      <div class="panel-body">
                        <div class="form-group">
                          <img src="{{ asset('assets/images/'.$khoaHoc->hinh_anh) }}" alt="" class="thumbnail">
                        </div>
                      </div>
                      <ul class="list-group">
                        <li class="list-group-item">
                            <label>Tên khóa học: </label>
                            <h4>{{$khoaHoc->ten_khoa_hoc}}</h4>
                        </li>
                        <li class="list-group-item">
                            <label>Giảng viên: </label>
                            <h4>@if($khoaHoc->nguoiDung->toChuc->count() > 0) {{ $khoaHoc->nguoiDung->toChuc[0]->ten_to_chuc }} @else {{ $khoaHoc->giangVien->ho_ten }} @endif</h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Đánh giá: 
                            @if($khoaHoc->danhGiaKH->count() != 0)
                                {{ round( ($khoaHoc->danhGiaKH->sum('so_sao') / $khoaHoc->danhGiaKH->count()), 1, PHP_ROUND_HALF_EVEN)}}
                            @else
                                0
                            @endif
                            <i class="fas fa-star"></i>
                            </h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Số bài giảng: {{$khoaHoc->dsChuongBai->count()}}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Mức độ: {{$khoaHoc->muc_do}}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Ngôn ngữ: {{$khoaHoc->ngon_ngu}}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Giá tiền: {{ number_format($khoaHoc->gia) }} VNĐ</h4>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Courses -->
@endsection

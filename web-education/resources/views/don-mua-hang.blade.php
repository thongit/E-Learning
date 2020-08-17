<div class="row">
    <div class="blog-items">

        <div class="blog-content col-md-12">
        <ul class="nav nav-pills">
            <li class="active"><a data-toggle="pill" href="#home1">Tất cả đơn hàng</a></li>
            <li><a data-toggle="pill" href="#menu1">Đơn hàng đang mua</a></li>
            <li><a data-toggle="pill" href="#menu2">Đơn hàng đang giao</a></li>
            <li><a data-toggle="pill" href="#menu3"> Đơn hàng đã giao</a></li>
          </ul><br>

          <div class="tab-content">
            <div id="home1" class="tab-pane fade in active">
              <div class="container-fluid adm-archivos">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <table class="table table-bordered table-hover vmiddle">
                                    <thead>
                                        <tr style="text-align: center;">
                                            <th style="text-align: center;">Hình ảnh khóa học</th>
                                            <th style="text-align: center;">Tên khóa học</th>
                                            <th style="text-align: center;">Giá</th>
                                            <th style="text-align: center;">Tên giảng viên</th>
                                            <th style="text-align: center;">Trạng thái</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                @foreach($donHang as $dsHocVien)
                                    @foreach($dsHocVien->ctHoaDon as $dsKhoaHoc)
                                       <tr>

                                           <td>
                                            <a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $dsKhoaHoc->khoaHoc->id) }}">
                                                <img src="{{ asset('assets/images/'.$dsKhoaHoc->khoaHoc->hinh_anh) }}" alt="Thumb" width="100px" height="100px">
                                            </a>
                                           </td>
                                           <td><a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $dsKhoaHoc->khoaHoc->id) }}">{{$dsKhoaHoc->khoaHoc->ten_khoa_hoc}}</a></td>
                                           <td>{{ number_format($dsKhoaHoc->khoaHoc->gia)}} VNĐ</td>
                                           <td><a href="{{ action('KhoaHocController@chiTietGiangVien' , $dsKhoaHoc->khoaHoc->giangVien->id)}}">{{$dsKhoaHoc->khoaHoc->giangVien->ho_ten}}</a></td>
                                            <td>
                                                @if(($dsHocVien->trang_thai) == 1)
                                                <button type="button" class="btn btn-primary">Đang Mua</button>
                                                @endif
                                                @if(($dsHocVien->trang_thai) == 2)
                                                <button type="button" class="btn btn-info">Đang Giao</button>
                                                @endif
                                                @if(($dsHocVien->trang_thai) == 3)
                                                <button type="button" class="btn btn-success">Đã Giao</button>
                                                @endif

                                            </td>

                                       </tr>
                                       @endforeach
                                       @endforeach
                                   </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <div style="display: flex;justify-content: center;">
                    <?php echo $donHang->render(); ?>
                </div>
            </div>
            <div id="menu1" class="tab-pane fade">
              <div class="container-fluid adm-archivos">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <table class="table table-bordered table-hover vmiddle">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Hình ảnh khóa học</th>
                                            <th style="text-align: center;">Tên khóa học</th>
                                            <th style="text-align: center;">Giá</th>
                                            <th style="text-align: center;">Tên giảng viên</th>
                                            <th style="text-align: center;">Trạng thái</th>
                                            <th style="text-align: center;">Hủy đơn hàng</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($donHang as $dsHocVien)
                                        @foreach($dsHocVien->ctHoaDon as $dsKhoaHoc)
                                        @if(($dsHocVien->trang_thai) == 1)
                                        <tr>
                                            <td>
                                                <a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $dsKhoaHoc->khoaHoc->id) }}">
                                                    <img src="{{ asset('assets/images/'.$dsKhoaHoc->khoaHoc->hinh_anh) }}" alt="Thumb" width="100px" height="100px">
                                                </a>
                                               </td>
                                               <td><a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $dsKhoaHoc->khoaHoc->id) }}">{{$dsKhoaHoc->khoaHoc->ten_khoa_hoc}}</a></td>
                                               <td>{{ number_format($dsKhoaHoc->khoaHoc->gia)}} VNĐ</td>
                                               <td><a href="{{ action('KhoaHocController@chiTietGiangVien' , $dsKhoaHoc->khoaHoc->giangVien->id)}}">{{$dsKhoaHoc->khoaHoc->giangVien->ho_ten}}</a></td>
                                             <td>
                                                 @if(($dsHocVien->trang_thai) == 1)
                                                 <button type="button" class="btn btn-primary">Đang Mua</button>
                                                 @endif
                                             </td>
                                             <td class="text-center">
                                                <a onclick="thongbaoxoa({{$dsHocVien->id}})"><span class="btn btn-danger">
                                                    <i class="fas fa-trash-alt" style="font-size: 30px;padding: 10px;"></i>
                                                </span></a>
                                            </td>
                                        </tr>
                                        @endif
                                            @endforeach
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex;justify-content: center;">
                    <?php echo $donHang->render(); ?>
                </div>
            </div>
            <div id="menu2" class="tab-pane fade">
              <div class="container-fluid adm-archivos">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <table class="table table-bordered table-hover vmiddle">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Hình ảnh khóa học</th>
                                            <th style="text-align: center;">Tên khóa học</th>
                                            <th style="text-align: center;">Giá</th>
                                            <th style="text-align: center;">Tên giảng viên</th>
                                            <th style="text-align: center;">Trạng thái</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($donHang as $dsHocVien)
                                    @foreach($dsHocVien->ctHoaDon as $dsKhoaHoc)
                                        @if(($dsHocVien->trang_thai) == 2)
                                        <tr>
                                            <td>
                                                <a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $dsKhoaHoc->khoaHoc->id) }}">
                                                    <img src="{{ asset('assets/images/'.$dsKhoaHoc->khoaHoc->hinh_anh) }}" alt="Thumb" width="100px" height="100px">
                                                </a>
                                               </td>
                                               <td><a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $dsKhoaHoc->khoaHoc->id) }}">{{$dsKhoaHoc->khoaHoc->ten_khoa_hoc}}</a></td>
                                               <td>{{ number_format($dsKhoaHoc->khoaHoc->gia)}} VNĐ</td>
                                               <td><a href="{{ action('KhoaHocController@chiTietGiangVien' , $dsKhoaHoc->khoaHoc->giangVien->id)}}">{{$dsKhoaHoc->khoaHoc->giangVien->ho_ten}}</a></td>
                                             <td>
                                                 @if(($dsHocVien->trang_thai) == 2)
                                                 <button type="button" class="btn btn-info">Đang Giao</button>
                                                 @endif
                                             </td>
                                        </tr>
                                        @endif
                                            @endforeach
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex;justify-content: center;">
                    <?php echo $donHang->render(); ?>
                </div>
            </div>
            <div id="menu3" class="tab-pane fade">
              <div class="container-fluid adm-archivos">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <table class="table table-bordered table-hover vmiddle">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Hình ảnh khóa học</th>
                                            <th style="text-align: center;">Tên khóa học</th>
                                            <th style="text-align: center;">Giá</th>
                                            <th style="text-align: center;">Tên giảng viên</th>
                                            <th style="text-align: center;">Trạng thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($donHang as $dsHocVien)
                                        @foreach($dsHocVien->ctHoaDon as $dsKhoaHoc)
                                        @if(($dsHocVien->trang_thai) == 3)
                                        <tr>
                                            <td>
                                                <a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $dsKhoaHoc->khoaHoc->id) }}">
                                                    <img src="{{ asset('assets/images/'.$dsKhoaHoc->khoaHoc->hinh_anh) }}" alt="Thumb" width="100px" height="100px">
                                                </a>
                                               </td>
                                               <td><a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $dsKhoaHoc->khoaHoc->id) }}">{{$dsKhoaHoc->khoaHoc->ten_khoa_hoc}}</a></td>
                                               <td>{{ number_format($dsKhoaHoc->khoaHoc->gia)}} VNĐ</td>
                                               <td><a href="{{ action('KhoaHocController@chiTietGiangVien' , $dsKhoaHoc->khoaHoc->giangVien->id)}}">{{$dsKhoaHoc->khoaHoc->giangVien->ho_ten}}</a></td>
                                             <td>
                                                 @if(($dsHocVien->trang_thai) == 3)
                                                 <button type="button" class="btn btn-success">Đã Giao</button>
                                                 @endif
                                             </td>
                                        </tr>
                                        @endif
                                            @endforeach
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex;justify-content: center;">
                    <?php echo $donHang->render(); ?>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>


<div class="table-responsive">
    <table class="table display data-table text-nowrap">
        <thead>
            <tr>
                <th>Ảnh</th>
                <th>Họn tên</th>
                <th>Số tài khoản</th>
                <th>Ngân hàng</th>
                <th>Tổng doanh thu</th>
                <th style="text-align: center">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @if($giangVien->count() > 0)
                @foreach($giangVien as $item)
                <tr>
                    <td class="text-center"><img src="{{ asset('assets/images/'.$item->anh_dai_dien) }}" width="50px" height="50px"></td>
                    <td style="font-size: large; font-weight: bold;">
                    @if($item->toChuc->count() > 0)
                        <a class="lam-gon-ten" style="width: 180px;" href data-toggle="modal" data-target="#myModal" data-tochuc="{{$item->toChuc[0]->ten_to_chuc}}" data-thongtin="{{ $item}}" data-nganhang="{{ $item->theNganHang[0]}}">
                            {{ $item->toChuc[0]->ten_to_chuc }}
                        </a>
                    @else 
                        <a class="lam-gon-ten" style="width: 180px;" href data-toggle="modal" data-target="#myModal" data-tochuc="khong" data-thongtin="{{ $item}}" data-nganhang="{{ $item->theNganHang}}">
                            {{ $item->ho_ten }} 
                        </a>
                    @endif
                        
                    </td>
                    <td>{{$item->theNganHang[0]->so_tai_khoan}}</td>
                    <td>{{$item->theNganHang[0]->ten_ngan_hang}}</td>
                    <td style="text-align: right"><span id="tt{{$item->id}}">{{number_format($item->theNganHang[0]->tong_tien)}} VNĐ</span></td>
                    <td style="text-align: center">
                        @if($item->theNganHang[0]->tong_tien < 0) 
                        <button onclick="thanhToan({{$item->id}}, {{$item->theNganHang[0]->tong_tien}})" id="thanhToan{{$item->id}}" type="button" class="btn btn-success btn-lg" >Thanh toán</button>
                        <button onclick="nhacNho({{$item->id}})" id="nhacNho{{$item->id}}" type="button" class="btn btn-warning btn-lg" >Nhắc nhở</button>
                        @elseif($item->theNganHang[0]->tong_tien == 0)
                        <button disabled id="thanhToan" type="button" class="btn btn-lg" >Thanh toán</button>
                        <button disabled id="nhacNho" type="button" class="btn btn-lg" >Nhắc nhở</button>
                        @else
                        <button onclick="thanhToan({{$item->id}}, {{$item->theNganHang[0]->tong_tien}})" id="thanhToan{{$item->id}}" type="button" class="btn btn-success btn-lg" >Thanh toán</button>
                        <button disabled id="nhacNho" type="button" class="btn btn-lg" >Nhắc nhở</button>
                        @endif
                    </td>
                </tr>
                @endforeach
            @else
                <td style="text-align: center" colspan="6"><span>Không tìm thấy!</span></td>
            @endif
        </tbody>
    </table>
</div>
<div style="display: flex; justify-content: center;">
    <?php echo $giangVien->render(); ?>
</div>
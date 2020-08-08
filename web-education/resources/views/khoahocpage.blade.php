<div class="row">
    <div class="top-course-items">
        <!-- Single Item -->
        <div class="dskh">
            @if($dsKhoaHoc->count() == 0)
                <h4 style="text-align:center">Không tìm thấy</h4> 
            @else
            @foreach($dsKhoaHoc as $khoaHoc)
            <div class="col-md-4 col-sm-6 equal-height">
                <div class="item">
                    <div class="thumb">
                        <img class="img-khoa-hoc" src="{{ asset('assets/images/'.$khoaHoc->hinh_anh) }}" alt="Thumb">
                        <div class="overlay">
                            <a href="{{ action('KhoaHocController@chiTietGiangVien' , $khoaHoc->giangVien->id) }}">
                                <img src="{{ asset('assets/images/'.$khoaHoc->giangVien->anh_dai_dien) }}" alt="Thumb">
                            </a>
                            <ul>
                                <li></li>
                                <li><i class="fas fa-list-ul"></i> {{$khoaHoc->dsChuongBai->count()}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="info">
                        <div class="meta">
                            <ul>
                                <li>
                                    <a class="lam-gon-ten" style="display: -webkit-box;" href="{{ action('KhoaHocController@chiTietGiangVien' , $khoaHoc->giangVien->id) }}">@if($khoaHoc->nguoiDung->toChuc->count() > 0) {{ $khoaHoc->nguoiDung->toChuc[0]->ten_to_chuc }} @else {{ $khoaHoc->giangVien->ho_ten }} @endif</a>

                                </li>
                                <li>
                                    @if($khoaHoc->danhGiaKH->count() != 0)
                                        {{ round( ($khoaHoc->danhGiaKH->sum('so_sao') / $khoaHoc->danhGiaKH->count()), 1, PHP_ROUND_HALF_EVEN)}}
                                    @else
                                        0
                                    @endif
                                    <i class="fas fa-star"></i>
                                </li>

                            </ul>
                            <ul>
                                <li>
                                    <a href="/linh-vuc/{{$khoaHoc->LinhVuc->id}}"> {{ $khoaHoc->LinhVuc->ten_linh_vuc }}</a>
                                </li>
                                <li>
                                    <span>({{$khoaHoc->danhGiaKH->count()}} đánh giá)</span>
                                </li>
                            </ul>
                        </div>
                        <h4>
                            <a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $khoaHoc->id) }}" class="lam-gon-van-ban-mo-ta"> {{ $khoaHoc->ten_khoa_hoc }}</a>
                        </h4>
                        <p class="lam-gon-van-ban-mo-ta">
                            {{ $khoaHoc->mo_ta_ngan }}
                        </p>
                        <div class="footer-meta">
                            <a class="btn btn-theme effect btn-sm" href="{{route('thanh-toan',$khoaHoc->id)}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Ghi danh</a>
                            <h4>@if($khoaHoc->gia != 0){{ number_format($khoaHoc->gia) }} VNĐ @else Miễn phí @endif</h4>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <!-- Single Item -->
    </div>
</div>
<div class="pagin" style="display: flex;justify-content: center;">
    <?php echo $dsKhoaHoc->render(); ?>
</div>
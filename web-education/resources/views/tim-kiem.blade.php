@extends('layout')
<title>EDUQTTT - Kết quả tìm kiếm</title>
@section('content')
@include('header')

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="container" style="font-size: large;">
        <a href="/">Trang chủ</a> &nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i>
        <a href="">Kết quả tìm kiếm</a>
    </div>
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12" style="">
                    <h2>Kết quả tìm kiếm</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    {{-- Start tìm kiếm nâng cao --}}
<div class="container">
    <div class="bg-tim-kiem-nc" id="course">
    <form id="search-form" class="new-added-form" action="{{ route('trang-chu.xu-ly-tim-kiem-nc') }}" method="GET">
        @csrf
        <div class="mg-tim-kiem-nc">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-xs-2 col-sm-2 col-md-2 dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Lĩnh Vực
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        @foreach($dsLinhVuc as $linhVuc)
                            <li><a href="#">{{ $linhVuc->ten_linh_vuc }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-xl-2 col-lg-2 col-xs-2 col-sm-2 col-md-2">
                    <div class="form-group">
                        {{--  <label for="sel1">Mức D(o</label>  --}}
                        <select class="form-control" id="chon" data-dependent="mucdo" name="chon">
                        <option>Mức Độ</option>
                        <a href="{{ route('trang-chu.xu-ly-tim-kiem-nc') }}"><option> Sơ Cấp</option></a>
                        <option>Trung Cấp </option>
                        <option>Chuyên Sâu</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-xs-2 col-sm-2 col-md-2 dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Ngôn Ngữ
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                    <li><a href="#">Tiếng Anh</a></li>
                    <li><a href="#">Tiếng Việt</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-lg-2 col-xs-2 col-sm-2 col-md-2 dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Giá Giảm Dần
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                    <li><a href="#">Giá Giảm Dần</a></li>
                    <li><a href="#">Giá Tăng Dần</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
{{-- End tìm kiếm nâng cao --}}

<!-- Start Popular Courses
    ============================================= -->
    <div class="popular-courses-area weekly-top-items default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="top-course-items">
                    <!-- Single Item -->
                    <div id="HienKhoaHoc"></div>
                    <div id="AnKhoaHoc">
                    @if(sizeOf($dsKhoaHoc) > 0)
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
                                            <li><i class="fas fa-clock"></i> 04:15:38</li>
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
                                        <a class="btn btn-theme effect btn-sm" href="#">Mua Ngay</a>
                                        <h4>@if($khoaHoc->gia != 0){{ number_format($khoaHoc->gia) }} VNĐ @else Miễn phí @endif</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif

                    @if(sizeOf($dsNguoiDung) > 0)
                        @foreach($dsNguoiDung as $nguoiDung)
                        @foreach($nguoiDung->khoaHoc as $tungkhoaHoc)
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item">
                                <div class="thumb">
                                    <img class="img-khoa-hoc" src="{{ asset('assets/images/'.$tungkhoaHoc->hinh_anh) }}" alt="Thumb">
                                    <div class="overlay">
                                        <a href="{{ action('KhoaHocController@chiTietGiangVien' , $nguoiDung->id) }}">
                                            <img src="{{ asset('assets/images/'.$nguoiDung->anh_dai_dien) }}" alt="Thumb">
                                        </a>
                                        <ul>
                                            <li><i class="fas fa-clock"></i> 04:15:38</li>
                                            <li><i class="fas fa-list-ul"></i> {{$tungkhoaHoc->dsChuongBai->count()}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a class="lam-gon-ten" style="display: -webkit-box;" href="{{ action('KhoaHocController@chiTietGiangVien' , $nguoiDung->id) }}">@if($nguoiDung->toChuc->count() > 0) {{ $nguoiDung->toChuc[0]->ten_to_chuc }} @else {{ $nguoiDung->ho_ten }} @endif</a>

                                            </li>
                                            <li>

                                                @if($tungkhoaHoc->danhGiaKH->count() != 0)
                                                {{ round( ($tungkhoaHoc->danhGiaKH->sum('so_sao') / $tungkhoaHoc->danhGiaKH->count()), 1, PHP_ROUND_HALF_EVEN)}}
                                            @else
                                                0
                                            @endif
                                                <i class="fas fa-star"></i>
                                            </li>

                                        </ul>
                                        <ul>
                                            <li>
                                                <a href="/linh-vuc/{{$tungkhoaHoc->LinhVuc->id}}"> {{ $tungkhoaHoc->LinhVuc->ten_linh_vuc }}</a>
                                            </li>
                                            <li>
                                                <span>({{$tungkhoaHoc->danhGiaKH->count()}} đánh giá)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4>
                                        <a href="{{ action('KhoaHocController@hienThiChiTietKhoaHoc' , $tungkhoaHoc->id) }}" class="lam-gon-van-ban-mo-ta"> {{ $tungkhoaHoc->ten_khoa_hoc }}</a>
                                    </h4>
                                    <p class="lam-gon-van-ban-mo-ta">
                                        {{ $tungkhoaHoc->mo_ta_ngan }}
                                    </p>
                                    <div class="footer-meta">
                                        <a class="btn btn-theme effect btn-sm" href="#">Mua Ngay</a>
                                        <h4>@if($tungkhoaHoc->gia != 0){{ number_format($tungkhoaHoc->gia) }} VNĐ @else Miễn phí @endif</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endforeach
                    @endif
                    <!-- Single Item -->

                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Courses -->
@endsection

@section('js')
<script>
  $(document).ready(function(){
        $("#chon").change(function(){
            var value = $(this).val();
            var input = {!!json_encode($tuKhoa)!!};
            var _token = $('input[name = "_token"]').val();
            //var kh;
            $.ajax({
                url:"{{ route('trang-chu.xu-ly-tim-kiem-nc') }}",
                {{--  dataType: "json",  --}}
                method:"GET",
                data:{value:value, input:input,  _token: _token},
                success:function(data){
                    //kh = data;
                    //$("#foreach").html('');
                    $("#course").html(data);
                    //console.log(data);
                    $("#AnKhoaHoc").html('');

                     console.log(data);
                    console.log(Object.keys(data).length);
                    var html ='';

                    for(var i = 0 ; i < Object.keys(data).length; i++)
                    {
                            html += '<p>'+data[i].ho_ten+'</p>';
                    }
                    $("#HienKhoaHoc").append(html);
                }

            });
        });
  });
</script>
@endsection

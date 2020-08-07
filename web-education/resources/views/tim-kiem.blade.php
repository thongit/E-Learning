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
                    <div class="form-group">
                        <select class="form-control" id="linhVuc" data-dependent="linhVuc" name="linhVuc">
                        <option value="0">Lĩnh vực</option>
                        @foreach($dsLinhVuc as $linhVuc)
                            <option value ="{{$linhVuc->id}}">{{ $linhVuc->ten_linh_vuc }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-xs-2 col-sm-2 col-md-2">
                    <div class="form-group">
                        <select class="form-control" id="mucDo" data-dependent="mucdo" name="chon">
                        <option>Mức độ</option>
                        <option>Sơ cấp</option>
                        <option>Trung cấp</option>
                        <option>Chuyên sâu</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-xs-2 col-sm-2 col-md-2 dropdown">
                    <div class="form-group">
                        <select class="form-control" id="ngonNgu" data-dependent="ngonNgu" name="ngonNgu">
                        <option>Ngôn ngữ</option>
                        <option> Tiếng Anh</option>
                        <option>Tiếng Việt</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-xs-2 col-sm-2 col-md-2 dropdown">
                    <div class="form-group">
                        <select class="form-control" id="sapXep" data-dependent="sapXep" name="sapXep">
                        <option>Sắp xếp</option>
                        <option value="1">Giá Giảm Dần</option>
                        <option value="2">Giá Tăng Dần</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>

<!-- Start Popular Courses
    ============================================= -->
    <div class="popular-courses-area weekly-top-items default-padding bottom-less">
        <div class="container">
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
        </div>
    </div>
    <!-- End Popular Courses -->
@endsection

@section('js')
<script>
  $(document).ready(function(){
        $("#mucDo").change(function(){
            timkiem();
        });
        $("#ngonNgu").change(function(){
            timkiem();
        });
        $("#sapXep").change(function(){
            timkiem();
        });
        $("#linhVuc").change(function(){
            timkiem();
        });

        function timkiem(){
            var mucdo = $("#mucDo").val();
            var ngonngu = $("#ngonNgu").val();
            var sapxep = $("#sapXep").val();
            var linhvuc = $("#linhVuc").val();
            var input = {!!json_encode($tuKhoa)!!};
            var _token = $('input[name = "_token"]').val();
            $.ajax({
                url:"{{ route('trang-chu.xu-ly-tim-kiem-nc') }}",
                method:"GET",
                data:{
                    mucdo:mucdo,
                    ngonngu:ngonngu,
                    sapxep:sapxep,
                    linhvuc:linhvuc,
                    input:input,  
                    _token: _token
                },
                success:function(data){
                    console.log(data.msg);
                    var html = '';
                    if(data.msg.length == 0)
                    {
                        html += '<h4 style="text-align:center">Không tìm thấy</h4>';
                    }
                    else
                    {
                        for(var i = 0; i<data.msg.length; i++)
                        {
                            html += '<div class="col-md-4 col-sm-6 equal-height">';
                            html += '<div class="item">';
                            html += '<div class="thumb">';
                            html += '<img class="img-khoa-hoc" src="/assets/images/'+ data.msg[i].hinh_anh + '" alt="Thumb">';
                            html += '<div class="overlay">';
                            html += '<a href="/giang-vien/'+data.msg[i].nguoi_dung_id+'">';
                            html += '<img src="/assets/images/'+data.msg[i].nguoi_dung["anh_dai_dien"]+'" alt="Thumb">';
                            html += '</a>';
                            html += '<ul>';
                            html += '<li></li>';
                            html += '<li><i class="fas fa-list-ul"></i> '+data.msg[i].ds_chuong_bai.length +'';
                            html +='</li>';
                            html += '</ul>';
                            html += '</div>';
                            html += '</div>';
                            html += '<div class="info">';
                            html += '<div class="meta">';
                            html += '<ul>';
                            html += '<li>';
                            html += '<a class="lam-gon-ten" style="display: -webkit-box;" href="/giang-vien/'+data.msg[i].nguoi_dung_id+'">'+data.dulieu[i][1]+'</a>';
                            html += '</li>';
                            html += '<li>';
                            html += ''+data.dulieu[i][0]+' <i class="fas fa-star"></i>';
                            html += '</li>';
                            html += '</ul>';
                            html += '<ul>';
                            html += '<li>';
                            html += '<a href="/linh-vuc/'+data.msg[i].linh_vuc_id+'">'+data.msg[i].linh_vuc['ten_linh_vuc'] +'</a>';
                            html += '</li>';
                            html += '<li>';
                            html += '<span>('+ data.msg[i].danh_gia_k_h.length +' đánh giá)</span>';
                            html += '</li>';
                            html += '</ul>';
                            html += '</div>';
                            html += '<h4>';
                            html += '<a href="/khoa-hoc/'+data.msg[i].id+'" class="lam-gon-van-ban-mo-ta">'+data.msg[i].ten_khoa_hoc+'</a>';
                            html += '</h4>';
                            html += '<p class="lam-gon-van-ban-mo-ta">'+ data.msg[i].mo_ta_ngan +'</p>';
                            html += '<div class="footer-meta">';
                            html += '<a class="btn btn-theme effect btn-sm" href="/thanhtoan/'+data.msg[i].id+'"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Ghi danh</a>';
                            html += '<h4>';
                            if(data.msg[i].gia  != 0)
                            {
                               html+= new Intl.NumberFormat('ja-JP').format(data.msg[i].gia)+' VNĐ';
                            }
                            else
                            {
                                html += 'Miễn phí';
                            }
                            html +='</h4>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                        }
                    }
                    $(".dskh").html(html);
                    $(".pagin").html('');
                }
            });
        }
  });
</script>
@endsection

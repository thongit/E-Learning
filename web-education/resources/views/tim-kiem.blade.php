@extends('layout')
@section('content')
@include('header')

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Khóa học</h1>
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
                    <div id="foreach">
                    @foreach($dsKhoaHoc as $khoaHoc)
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img class="img-khoa-hoc" src="{{ asset('assets/images/'.$khoaHoc->hinh_anh) }}" alt="Thumb">
                                <div class="overlay">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/'.$khoaHoc->giangVien->anh_dai_dien) }}" alt="Thumb">
                                    </a>
                                    <ul>
                                        <li><i class="fas fa-clock"></i> 04:15:38</li>
                                        <li><i class="fas fa-list-ul"></i> 32</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">Education</a>
                                            <a href="#"> {{ $khoaHoc->LinhVuc->ten_linh_vuc }}</a>

                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>(1k)</span>
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
                                    <h4>{{ number_format($khoaHoc->gia) }} VNĐ</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                    <!-- Single Item -->
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
            var kh;
            $.ajax({
                url:"{{ route('trang-chu.xu-ly-tim-kiem-nc') }}",
                method:"GET",
                data:{value:value, input:input,  _token: _token},
                success:function(data){
                    kh = data;
                    $("#foreach").html('');
                    $("#course").html(data.sds);
                    console.log(data[0]);
                }
            });
        });
  });
</script>

{{-- <script>
    $(function(){
        function showValues() {
            var url = '{{ route('trang-chu.xu-ly-tim-kiem') }}';
            var str = $("#search-form").serialize();
            $("#course").text(url+str);
        }
        $("select").on("change",showValues);
        showValues();
    });
    </script> --}}
@endsection

@extends('layout')
<title>EDUQTTT - Bài giảng</title>

@section('content')
@include('header')
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
<link href="http://vjs.zencdn.net/5.7.1/video-js.css" rel="stylesheet">
<link href="https://unpkg.com/@videojs/themes@1/dist/fantasy/index.css" rel="stylesheet">
<link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style>
.blog-area .pagination li a{
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
    margin-right: 1px;
}
</style>
<script>
$(document).ready(function(){
    $('#noi_dung').keypress(function(event) {
        if (event.keyCode == 13 || event.which == 13) {
            event.preventDefault();
            if(document.getElementById("noi_dung").value == '')
            {
                swal.fire("Bạn chưa nhập nội dung bình luận","" , "error")
            }
            else
            {
                binhLuan(document.getElementById("noi_dung").value);
            }  
        }
    });

    function hoanThanh(){
        $.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
        $.ajax({
            type:'POST',
            url:'{{ route("hoan-thanh") }}',
            data:
            {
            _token : '<?php echo csrf_token() ?>',
            idND: {{$video->id}}
            },
            success:function(data) {
                if(data.msg == 1 )
                {
                    swal.fire("Hoàn tất","","success");
                    $("#hoanThanh").remove();
                    $(".da-hoc").show();
                }
                else
                {
                    swal.fire("Vui lòng hoàn thành bài trước!","","error")
                }
            }
        });
    }

    function binhLuan($nd){
        $.ajax({
            type:'POST',
            url:'{{ route("xu-ly-binh-luan") }}',
            data:
            {
            _token : '<?php echo csrf_token() ?>',
            idND: {{$video->id}},
            noi_dung: $nd
            },
            success:function(data) {
                console.log(data);
                $(".dsbl").html(data);
                $('#noi_dung').val("");
            }
        });
    }

    function laydl(page)
    {
        $.ajax({
            url: '/lay-binh-luan?page='+page,
            method:"GET",
            data:{
                idND: {{$video->id}},
                _token : '<?php echo csrf_token() ?>'
            },
            success:function(data){
                console.log(data);
                $(".dsbl").html(data);
            }
        });
    }

    $(document).on('click','.pagination a', function(e){
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        laydl(page);
    });

    $("#hoanThanh").click(function (){
        Swal.fire({
			title: 'Bạn đã hoàn thành bài giảng?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hoàn thành!',
			cancelButtonText:'Chưa'
			}).then((result) => {
			if (result.value) {
				hoanThanh();
			}
		})
		
	});

    $("#binhluan").click(function (){
        if(document.getElementById("noi_dung").value == '')
		{
			swal.fire("Bạn chưa nhập nội dung bình luận","" , "error")
		}
		else
        {
            binhLuan(document.getElementById("noi_dung").value);
        }
	});
});
</script>
@if (session('alerterror'))
    <script>
        swal.fire("{{ session('alerterror') }}","","error")
    </script>
@endif
@if (session('error'))
    <script>
        swal.fire("{{ session('error') }}","","error")
    </script>
@endif
@if (session('thongbao'))
    <script>
        swal.fire("{{ session('thongbao') }}","","success")
    </script>
    @endif

    <!-- Start Breadcrumb
    ============================================= -->
    <!-- <div class="container" style="font-size: large;">
        <a href="/">Trang chủ</a> &nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i> 
        <a href="{{ route('sua') }}">Thông tin cá nhân</a>&nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i> 
    </div> -->
    <div class="container" style="font-size: large;">
        <a href="/">Trang chủ</a> &nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i> 
        <a href="{{ route('trang-chu.khoa-hoc') }}">Danh sách khóa học</a>&nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i> 
        <a href="/khoa-hoc/{{ $video->Chuong->khoa_hoc_id }}" >Chi tiết khóa học</a>&nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i> 
        <a href="">Bài: {{ $video->tieu_de }}</a>
    </div>
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12" style="">
                    <h2>{{ $video->Chuong->khoaHoc->ten_khoa_hoc }}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>{{ $video->tieu_de }}</h1>
                </div>
            </div>
        </div>
    </div> -->
    <script>
    function goBack() {
    window.history.back()
    }
    </script>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog left-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <h3>Chương:  {{$video->Chuong->ten_chuong}}</h3>
                <div class="col-md-8">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video id="my-video" class="video-js vjs vjs-big-play-centered AdvancedExample__Video-sc-1x7qqz9-7 dVCxLk" crossorigin="anonymous" controls preload="auto" width="765" height="429" poster="MY_VIDEO_POSTER.jpg" data-setup="{}">

                            <source src="{{ asset('assets/video/'.$video->video)}}" type='video/mp4'>

                            <p class="vjs-no-js">Bạn phải bật javascript để xem video này, và nâng cấp trình duyệt <a href="http://videojs.com/html5-video-support/" target="_blank">hỗ trợ HTML5 video</a></p>

                        </video>
                        <script src="http://vjs.zencdn.net/5.7.1/video.js"></script>
                        
                    </div>
                    <div>
                        <h4><a>Bài @foreach($video->Chuong->noiDung as $key => $chuong) @if($chuong->id == $video->id) {{$key+1}} @endif @endforeach: {{$video->tieu_de}}</a></h4>
                        @if($tienDo == 2)
                        <form method="post" action="{{ route('hoan-thanh') }}" role="form">
                            {!! csrf_field() !!}
                            <a class="btn btn-success da-hoc" style="display:none">
                            Đã học!
                            </a>
                            <button id="hoanThanh" type="button" class="btn btn-primary">
                                Hoàn thành bài giảng
                            </button>
                        </form>
                        @elseif ($tienDo == 1)
                        <a class="btn btn-success">
                          Đã học!
                        </a>
                        @endif
                    </div>
                    <br>
                    <div class="panel panel-primary">
                        <div class="panel-heading">NỘI DUNG</div>
                      <ul class="list-group">
                        @if($tienDo == 2 || $tienDo == 1)
                            @if($video->Chuong->baiKiemTra->count() >0)
                            <li class="list-group-item">
                                <h4>Bài kiểm tra cuối chương: {{ $video->Chuong->baiKiemTra[0]->ten_bai_kt }}</h4>
                                @if($kiemtra == null && $kiemtra1 == null)
                                <a href="{{ route('trac-nghiem-excel',$video->Chuong->baiKiemTra[0]->file_de_kt)}}" type="button" class="btn btn-info">Làm kiểm tra</a>                            
                                @else
                                <h4 style="color: green;">Kết quả kiểm tra của bạn: {{$kiemtra->diem}}</h4>
                                @endif
                                @if($video->Chuong->baiKiemTra[0]->lam_lai == 1 && $kiemtra1 == null && $kiemtra != null)
                                <a href="{{ route('trac-nghiem-excel',$video->Chuong->baiKiemTra[0]->file_de_kt)}}" type="button" class="btn btn-warning">Làm lại bài kiểm tra</a>
                                @endif
                            </li>
                            @else
                            <li class="list-group-item">
                                <h4>Bài kiểm tra cuối chương: </h4>
                                <h5>Không có bài kiểm tra</h5>
                            </li>
                            @endif
                        @endif
                        @if($video->tai_lieu != '_')
                        <li class="list-group-item">
                            <h4>Tài liệu</h4>
                            <h5><a href="{{ route('download',$video->id)}}">Tải file tài liệu về</a></h5>
                        </li>
                        @else
                        <li class="list-group-item">
                            <h4>Tài liệu: </h4>
                            <h5>Không có tài liệu</h5>
                        </li>
                        @endif
                    </ul>
                    </div>
                        <div class="form-group">
                        <label for="usr">Bình luận</label>
                        <input type="text" class="form-control" id="noi_dung" name="noi_dung" required>
                        <button id="binhluan" type="button" class="btn btn-primary">
                            Bình luận
                        </button>
                        </div>
                    <div class="dsbl">
                        @include('binh-luan')
                    </div>
                </div>
                <div class="col-md-4 container" style="border-left: 1px solid #e7e7e7;">
                @foreach($video->Chuong->noiDung as $key => $chuong)
                    @if($chuong->id != $video->id)
                    <div class="col-md-12" style="border-bottom: 1px solid #e7e7e7;">
                        <br>
                        <a href="{{ route('video',$chuong->id)}}">
                            <div id="video-click">
                                <div class="embed-responsive embed-responsive-16by9"> 
                                <video id="my-video" class="video-js vjs-big-play-centered AdvancedExample__Video-sc-1x7qqz9-7 dVCxLk vjs-paused preview-player-dimensions vjs-workinghover vjs-v7 vjs-user-active vjs-mux vjs-fluid vjs-controls-disabled" crossorigin="anonymous" controls="" preload="auto" width="640" height="360" poster="MY_VIDEO_POSTER.jpg" data-setup="{}">

                                    <source src="{{ asset('assets/video/'.$chuong->video)}}" type='video/mp4'>

                                    <p class="vjs-no-js">Bạn phải bật javascript để xem video này, và nâng cấp trình duyệt <a href="http://videojs.com/html5-video-support/" target="_blank">hỗ trợ HTML5 video</a></p>

                                </video>
                                </div>
                                <h4 for=""><a href="{{ route('video',$chuong->id)}}">Bài {{$loop->index +1}}: {{$chuong->tieu_de}}</a></h4>
                            </div>
                        </a>
                    </div>
                    @endif
                @endforeach
                </div>
            </div>
            </div>
        </div>
    <!-- End Blog -->
@endsection

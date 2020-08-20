@extends('layout')
<title>EDUQTTT - Quản lý khóa học</title>
@section('content')
@if (session('warning'))
    <script>
        swal.fire("{{ session('warning') }}","","warning")
    </script>
@endif
@if (session('success'))
    <script>
        swal.fire("{{ session('success') }}","","success")
    </script>
@endif
@include('header')

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="container" style="font-size: large;">
        <a href="/">Trang chủ</a> &nbsp <i class="fa fa-caret-right" aria-hidden="true">&nbsp</i> 
        <a href="{{ route('dskhdt') }}">Quản lý khóa học</a>
    </div>
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12" style="">
                    <h2>Danh sách khóa học đã tạo</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog left-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">

                    <div class="blog-content col-md-9">
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#home1">Tất cả khóa học đã tạo</a></li>
                        <li><a data-toggle="pill" href="#menu1">Khóa học đang tạo</a></li>
                        <li><a data-toggle="pill" href="#menu2">Khóa học đang chờ duyệt</a></li>
                        <li><a data-toggle="pill" href="#menu3">Khóa học đã duyệt</a></li>
                      </ul><br>
                      
                      <div class="tab-content">
                        <div id="home1" class="tab-pane fade in active">
                          <div class="container-fluid adm-archivos">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <table class="table table-bordered table-hover vmiddle">
                                                <thead>
                                                    <tr>
                                                        <th>Hình ảnh khóa học</th>
                                                        <th>Tên khóa học</th>
                                                        <th></th>
                                                        <th>Bài kiểm tra</th>
                                                        <th>Trạng thái</th>
                                                        <th>Thống kê</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($khoahocs as $k)
                                                    <tr>
                                                        <td ><img src="{{ asset('assets/images/'.$k->hinh_anh) }}" class="img-thumbnail" width="100" height="100"></td>
                                                        <td><a href="/khoa-hoc/{{$k->id}}">{{$k->ten_khoa_hoc}}</a></td>
                                                        <td class="text-center">
                                                            <a onclick="thongbaoxoa({{$k->id}})"><span class="btn btn-danger">Xóa</span></a>
                                                            <a href="/khoa-hoc/sua/{{$k->id}}"><span class="btn btn-primary">Sửa</span></a>
                                                        </td>
                                                        
                                                        <td>
                                                            <a href="{{ route('them-cau-hoi-excel',$k->id) }}" class="btn btn-info">Tạo bài kiểm tra</a>
                                                            <a href="{{ route('ql-bai-kt',$k->id) }}" class="btn btn-danger">Quản lý bài kiểm tra</a>
                                                        </td>

                                                        <td>
                                                        @if($k->trang_thai == 3)            
                                                        <p class="btn btn-success">Đã duyệt</p> 
                                                        @endif 

                                                        @if($k->trang_thai == 2)                     
                                                        <p class="btn btn-warning" onclick="update({{$k->id}})">Đang chờ duyệt</p>
                                                        @endif

                                                        @if($k->trang_thai==1)     <p class="btn btn-primary" onclick="update({{$k->id}})">Gửi kiểm duyệt</p>
                                                        @endif

                                                         </td>
                                                         <td>
                                                             <a href="{{ route('thong-ke-khoa-hoc',$k->id) }}" class="btn btn-info">Xem thống kê</a>
                                                         </td>
                                                    </tr>
                                                        @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
                                                        <th>Hình ảnh khóa học</th>
                                                        <th>Tên khóa học</th>
                                                        <th></th>
                                                        <th>Bài kiểm tra</th>
                                                        <th>Trạng thái</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($khoahocs as $k)
                                                    @if($k->trang_thai == 1)
                                                    <tr>
                                                        <td><img src="{{ asset('assets/images/'.$k->hinh_anh) }}" class="img-thumbnail" width="100" height="100"></td>
                                                        <td><a href="/khoa-hoc/{{$k->id}}">{{$k->ten_khoa_hoc}}</a></td>
                                                        <td class="text-center">
                                                            <a onclick="thongbaoxoa({{$k->id}})"><span class="btn btn-danger">Xóa</span></a>
                                                            <a href="/khoa-hoc/sua/{{$k->id}}"><span class="btn btn-primary">Sửa</span></a>
                                                        </td>
                                                        
                                                        <td>
                                                            <a href="{{ route('them-cau-hoi-excel',$k->id) }}" class="btn btn-info">Tạo bài kiểm tra</a>
                                                            <a href="{{ route('ql-bai-kt',$k->id) }}" class="btn btn-danger">Quản lý bài kiểm tra</a>
                                                        </td>

                                                        <td>
                                                       <p class="btn btn-primary" onclick="update({{$k->id}})">Gửi kiểm duyệt</p>

                                                         </td>
                                                    </tr>
                                                    @endif
                                                        @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
                                                        <th>Hình ảnh khóa học</th>
                                                        <th>Tên khóa học</th>
                                                        <th></th>
                                                        <th>Bài kiểm tra</th>
                                                        <th>Trạng thái</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($khoahocs as $k)
                                                    @if($k->trang_thai == 2)
                                                    <tr>
                                                        <td><img src="{{ asset('assets/images/'.$k->hinh_anh) }}" class="img-thumbnail" width="100" height="100"></td>
                                                        <td><a href="/khoa-hoc/{{$k->id}}">{{$k->ten_khoa_hoc}}</a></td>
                                                        <td class="text-center">
                                                            <a onclick="thongbaoxoa({{$k->id}})"><span class="btn btn-danger">Xóa</span></a>
                                                            <a href="/khoa-hoc/sua/{{$k->id}}"><span class="btn btn-primary">Sửa</span></a>
                                                        </td>
                                                        
                                                        <td>
                                                            <a href="{{ route('them-cau-hoi-excel',$k->id) }}" class="btn btn-info">Tạo bài kiểm tra</a>
                                                            <a href="{{ route('ql-bai-kt',$k->id) }}" class="btn btn-danger">Quản lý bài kiểm tra</a>
                                                        </td>

                                                        <td>
                                                       <p class="btn btn-warning" onclick="update({{$k->id}})">Đang chờ duyệt</p>
                                                         </td>
                                                    </tr>
                                                    @endif
                                                        @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
                                                        <th>Hình ảnh khóa học</th>
                                                        <th>Tên khóa học</th>
                                                        <th></th>
                                                        <th>Bài kiểm tra</th>
                                                        <th>Trạng thái</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($khoahocs as $k)
                                                    @if($k->trang_thai == 3)
                                                    <tr>
                                                        <td><img src="{{ asset('assets/images/'.$k->hinh_anh) }}" class="img-thumbnail" width="100" height="100"></td>
                                                        <td><a href="/khoa-hoc/{{$k->id}}">{{$k->ten_khoa_hoc}}</a></td>
                                                        <td class="text-center">
                                                            <a onclick="thongbaoxoa({{$k->id}})"><span class="btn btn-danger">Xóa</span></a>
                                                            <a href="/khoa-hoc/sua/{{$k->id}}"><span class="btn btn-primary">Sửa</span></a>
                                                        </td>
                                                        
                                                        <td>
                                                            <a href="{{ route('them-cau-hoi-excel',$k->id) }}" class="btn btn-info">Tạo bài kiểm tra</a>
                                                            <a href="{{ route('ql-bai-kt',$k->id) }}" class="btn btn-danger">Quản lý bài kiểm tra</a>
                                                        </td>

                                                        <td>
                                                       <p class="btn btn-success" onclick="update({{$k->id}})">Đã duyệt</p> 
                                                         </td>
                                                    </tr>
                                                    @endif
                                                        @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>


                      <div style="display: flex;justify-content: center;">
                        <?php echo $khoahocs->render(); ?>
                    </div>    
                    </div>
                   @include('panel')
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
<script>
function thongbaoxoa($id) {
    Swal.fire({
        title: 'Bạn có Muốn Xóa Không?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok. Xóa nó!',
        cancelButtonText:'Không'
        }).then((result) => {
        if (result.value) {
            $url='/khoa-hoc/xoa/'+$id;
            open($url,"_self") 
        }
    })
}
</script>
<script>
function update($id) {
    Swal.fire({
        title: 'Bạn có thay đổi Không?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok. Thay đổi!',
        cancelButtonText:'Không'
        }).then((result) => {
        if (result.value) {
            Swal.fire(
            'Thành công!',
            'Bạn đã thay đổi thành công.',
            'success'
            )
            $url='/khoa-hoc/ds-khoa-hoc-da-tao/'+$id;
            open($url,"_self") 
        }
    })
}
</script>
@endsection

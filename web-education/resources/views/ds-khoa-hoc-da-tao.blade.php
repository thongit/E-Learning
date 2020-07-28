@extends('layout')
@section('content')
@include('header')
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Danh sách khóa học đã tạo</h1>
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

                    <div class="blog-content col-md-8">
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#home">Tất cả khóa học đã tạo</a></li>
                        <li><a data-toggle="pill" href="#menu1">Khóa học đang tạo</a></li>
                        <li><a data-toggle="pill" href="#menu2">Khóa học đang chờ duyệt</a></li>
                        <li><a data-toggle="pill" href="#menu3">Khóa học đã duyệt</a></li>
                      </ul><br>
                      
                      <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
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
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($khoahocs as $k)
                                                    <tr>
                                                        <td ><img src="{{ asset('assets/images/'.$k->hinh_anh) }}" class="img-thumbnail" width="100" height="100"></td>
                                                        <td>{{$k->ten_khoa_hoc}}</td>
                                                        <td class="text-center">
                                                            <a onclick="thongbaoxoa({{$k->id}})"><span class="btn btn-danger">Xóa</span></a>
                                                            <a href="/khoa-hoc/sua/{{$k->id}}"><span class="btn btn-primary">Sửa</span></a>
                                                        </td>
                                                        <td>
                                                        @if($k->trang_thai == 3)            
                                                        <p class="btn btn-success" onclick="update({{$k->id}})">Đã duyệt</p> 
                                                        @endif 

                                                        @if($k->trang_thai == 2)                     
                                                        <p class="btn btn-warning" onclick="update({{$k->id}})">Đang chờ duyệt</p>
                                                        @endif

                                                        @if($k->trang_thai==1)     <p class="btn btn-primary" onclick="update({{$k->id}})">Gửi kiểm duyệt</p>
                                                        @endif

                                                         </td>
                                                        <td><a href="" class="btn btn-info">Tạo bài kiểm tra</a></td>
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
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($khoahocs as $k)
                                                    @if($k->trang_thai == 1)
                                                    <tr>
                                                        <td><img src="{{ asset('assets/images/'.$k->hinh_anh) }}" class="img-thumbnail" width="100" height="100"></td>
                                                        <td>{{$k->ten_khoa_hoc}}</td>
                                                        <td class="text-center">
                                                            <a onclick="thongbaoxoa({{$k->id}})"><span class="btn btn-danger">Xóa</span></a>
                                                            <a href="/khoa-hoc/sua/{{$k->id}}"><span class="btn btn-primary">Sửa</span></a>
                                                        </td>
                                                        <td>
                                                       <p class="btn btn-primary" onclick="update({{$k->id}})">Gửi kiểm duyệt</p>

                                                         </td>
                                                        <td><a href="" class="btn btn-info">Tạo bài kiểm tra</a></td>
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
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($khoahocs as $k)
                                                    @if($k->trang_thai == 2)
                                                    <tr>
                                                        <td><img src="{{ asset('assets/images/'.$k->hinh_anh) }}" class="img-thumbnail" width="100" height="100"></td>
                                                        <td>{{$k->ten_khoa_hoc}}</td>
                                                        <td class="text-center">
                                                            <a onclick="thongbaoxoa({{$k->id}})"><span class="btn btn-danger">Xóa</span></a>
                                                            <a href="/khoa-hoc/sua/{{$k->id}}"><span class="btn btn-primary">Sửa</span></a>
                                                        </td>
                                                        <td>
                                                       <p class="btn btn-warning" onclick="update({{$k->id}})">Đang chờ duyệt</p>

                                                         </td>
                                                        <td><a href="" class="btn btn-info">Tạo bài kiểm tra</a></td>
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
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($khoahocs as $k)
                                                    @if($k->trang_thai == 3)
                                                    <tr>
                                                        <td><img src="{{ asset('assets/images/'.$k->hinh_anh) }}" class="img-thumbnail" width="100" height="100"></td>
                                                        <td>{{$k->ten_khoa_hoc}}</td>
                                                        <td class="text-center">
                                                            <a onclick="thongbaoxoa({{$k->id}})"><span class="btn btn-danger">Xóa</span></a>
                                                            <a href="/khoa-hoc/sua/{{$k->id}}"><span class="btn btn-primary">Sửa</span></a>
                                                        </td>
                                                        <td>
                                                       <p class="btn btn-success" onclick="update({{$k->id}})">Đã duyệt</p> 

                                                         </td>
                                                        <td><a href="" class="btn btn-info">Tạo bài kiểm tra</a></td>
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
            Swal.fire(
            'Đã Xóa!',
            'Bạn đã xóa thành công.',
            'success'
            )
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

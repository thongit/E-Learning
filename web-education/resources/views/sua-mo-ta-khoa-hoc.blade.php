@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/19.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Sửa mô tả khóa học</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> ...</a></li>
                        <li><a href="#">...</a></li>
                        <li class="active">Sửa mô tả khóa học</li>
                    </ul>
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
                            <h3>Sửa mô tả khóa học</h3>
                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                        {{$err}}<br>
                                    @endforeach
                                </div>
                            @endif
                            @if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>
                            @endif
                            <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="panel panel-info">
                                  <div class="panel-heading">Khóa học đang tạo</div>
                                  <div class="panel-body">{{$khoahocs->ten_khoa_hoc}}</div>
                                </div>
                                <div class="form-group">
                                    <label for="tenkhoahoc">Tên khóa học</label>
                                    <input type="text" class="form-control" name="TenKhoaHoc" value="{{$khoahocs->ten_khoa_hoc}}">
                                </div>
                                <div class="form-group">
                                    <label for="motakhoahoc">Mô tả khóa học</label>
                                    <input type="text" class="form-control" name="MoTaKhoaHoc" value="{{$khoahocs->mo_ta_ngan}}">
                                </div>
                                <div class="col-sm-6">
                                    <label for="mucdo">Cấp độ</label>
                                    <select name="MucDo" id="">
                                        <option value="Sơ cấp">Sơ cấp</option>
                                        <option value="Trung Cấp">Trung cấp</option>
                                        <option value="Chuyên Sâu">Chuyên sâu</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="ngonngu">Ngôn ngữ</label>
                                    <select name="NgonNgu" id="">
                                        <option value="Tiếng việt">Tiếng việt</option>
                                        <option value="Tiếng anh">Tiếng anh</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Ảnh khóa học hiện tại</label>
                                    <img src="{{ asset('assets/images/'.$khoahocs->hinh_anh) }}" width="100" height="50">
                                </div>
                                <div class="col-sm-6">
                                    <label for="khoahoc">Ảnh khóa học</label>
                                    <input type="file" class="form-control-file" name="AnhKhoaHoc" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label for="gia">Giá khóa học</label>
                                    <input type="number" class="form-control" name="Gia" value="{{$khoahocs->gia}}">
                                </div>
                                <div class="col-sm-6">
                                    <label for="linhvuc">Lĩnh vực</label>
                                    <select class="form-control" id="" name="LinhVuc">
                                    @foreach ($linhvucs as $lv)
                                    <option value="{{$lv->id}}">
                                        {{$lv->ten_linh_vuc}}
                                    </option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="motatongquat">Mô tả tổng quát</label>
                                    <input type="textarea" class="form-control" name="MoTaTongQuat" value="{{$khoahocs->mo_ta_chi_tiet}}" rows="3" >
                                </div>
                                <button type="submit" class="btn btn-success">Sửa</button>
                                <button type="reset" class="btn btn-danger">Làm mới</button>
                            </form>
                            <br>
                            <h3>Danh sách chương</h3>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Tên Chương</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($chuongs as $c)
                                    @if($khoahocs->id==$c->khoa_hoc_id)
                                    <tr>
                                        <td>{{$c->ten_chuong}}</td>
                                        <td class="text-center">
                                            <a onclick="thongbaoxoa({{$c->id}})"><span class="btn btn-sm btn-danger">Xóa</span></a>
                                            <a href="/khoa-hoc/sua-chuong/{{$c->id}}"><span class="btn btn-sm btn-primary">Sửa</span></a>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
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
            $url='/khoa-hoc/xoa-chuong/'+$id;
            open($url,"_self") 
        }
    })
}
</script>
@endsection

@section('js')

@endsection

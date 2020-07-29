@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Tạo bài giảng khóa học</h1>
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
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif
                        @if(session('thongbao'))
                            <script>
                                swal.fire("{{session('thongbao')}}")
                            </script>
                        @endif
                        <form method="post" action="" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="panel panel-info">
                              <div class="panel-heading">Khóa học đang tạo</div>
                              <div class="panel-body">{{$khoahocs->ten_khoa_hoc}}</div>
                            </div>
                            <div class="form-group">
                                <label>Danh sách chương đã tạo</label>
                                <select class="form-control" id="" name="Chuong">
                                    @foreach ($chuongs as $c)
                                    @if($khoahocs->id==$c->khoa_hoc_id)
                                    <option value="{{$c->id}}">
                                        {{$c->ten_chuong}}
                                    </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                             <br>
                            <div class="form-group">
                                <label for="motakhoahoc">Tên bài</label>
                                <input type="text" class="form-control" id="motakhoahoc" placeholder="Tên bào giảng" name="TieuDe" value="">
                            </div>
                            <div class="col-sm-6">
                                <label for="uploadvideo">Upload video</label>
                                <input type="file" class="form-control-file border" name="Video">
                            </div>
                            <div class="col-sm-6">
                                <label for="uploadtailieu">Upload Tài liệu</label>
                                <input type="file" class="form-control-file border" name="TaiLieu">
                            </div>
                            <br>
                            <div>
                                <button type="submit" class="btn btn-success">Lưu lại</button>
                                <button type="reset" class="btn btn-danger">Làm mới</button>
                            </div>
                        </form>
                    </div>
                    @include('panel')
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection

@section('js')

@endsection

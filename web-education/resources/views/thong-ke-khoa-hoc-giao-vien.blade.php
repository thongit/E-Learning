@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Thống kê</h1>
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
                        <div class="panel panel-primary">
                          <div class="panel-heading">Danh thu</div>
                          <div class="panel-body">
                              <label for="">Tổng danh thu tất cả khóa học</label>
                              <p>{{number_format($danhthu)}}</p>
                          </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">Danh sách học viên</div>
                            @if($thongbao==0)
                                    <div class="panel-body">
                                        Không có học viên
                                    </div>
                            @else

                          <div class="panel-body">
                              <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Ảnh đại diện</th>
                                            <th>Tên học viên</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @for($i=0;$i< sizeof($dsTenHocVien);$i++)
                                    <tr>
                                        <td><img src="{{ asset('assets/images/'.$dsTenHocVien[$i][0]) }}" class="thumbnail" width="50px" height="50px">
                                        </td>
                                        <td>{{$dsTenHocVien[$i][1]}}</td>
                                        <td>{{$dsTenHocVien[$i][2]}}</td>
                                    </tr>
                                    @endfor
                                    </tbody>
                                </table>
                          </div>
                          @endif
                        </div>
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

@extends('layout')
@section('content')
@include('header')

<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Trắc nghiệm</h1>
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
                    <h3>Kiểm tra trắc nghiệm</h3>
                            <form>
                                @foreach($cauHoi as $CauHoi)
                                <div class="cauhoi">
                                    <b>Câu số  {{$loop->index +1}}: {{ $CauHoi->noiDung }}</b><br>
                                    <!-- Group of default radios - option 1 -->
                                    <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input"  name="groupOfDefaultRadios">
                                    <label class="custom-control-label" for="defaultGroupExample1">{{ $CauHoi->dapAnA }}</label>
                                    </div>
                                    <!-- Group of default radios - option 2 -->
                                    <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input"  name="groupOfDefaultRadios">
                                    <label class="custom-control-label" for="defaultGroupExample2">{{ $CauHoi->dapAnB }}</label>
                                    </div>
                                    <!-- Group of default radios - option 3 -->
                                    <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input"  name="groupOfDefaultRadios">
                                    <label class="custom-control-label" for="defaultGroupExample3">{{ $CauHoi->dapAnC }}</label>
                                    </div>
                                    <!-- Group of default radios - option 4 -->
                                    <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input"  name="groupOfDefaultRadios">
                                    <label class="custom-control-label" for="defaultGroupExample4">{{ $CauHoi->dapAnD }}</label>
                                    </div>
                                </div>
                                @endforeach
                                <button type="button" class="btn btn-success">Nộp bài</button>
                            </form>


                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-4">
                        <aside>
                            <div class="single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <img src="assets/img/advisor/2.jpg" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <span>Giảng viên</span>
                                        <h4>Nguyễn Văn A</h4>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Tạo khóa học</button>
                                </div>
                            </div>
                            <div class="sidebar-item category">
                                <div class="title">
                                    <h4>Danh mục</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="#">Thông tin cá nhân</a>
                                        </li>
                                        <li>
                                            <a href="#">Quản trị khóa học</a>
                                        </li>
                                        <li>
                                            <a href="#">Kho tài liệu</a>
                                        </li>
                                        <li>
                                            <a href="#">Đăng xuất</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection

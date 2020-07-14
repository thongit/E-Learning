@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/19.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Tạo mô tả khóa học</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> ...</a></li>
                        <li><a href="#">...</a></li>
                        <li class="active">Tạo mô tả khóa học</li>
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
                        <form method="post" action="">
                            <div class="panel panel-info">
                              <div class="panel-heading">Khóa học đang tạo</div>
                              <div class="panel-body">Phát Âm Tiếng Anh Chuẩn</div>
                            </div>
                            <div id="inputFormRow">
                                <div>
                                    <label for="tenchuong">Tên chương 1</label>
                                    <input type="text" name="title[]" class="form-control m-input" placeholder="Tên chương" autocomplete="off">
                                </div>
                                <div id="newbaigiang"></div>
                            </div>
                            <br>
                            <button id="thembaigiang" type="button" class="btn btn-info">Thêm Chương</button>
                            <button type="button" class="btn btn-success">Lưu lại</button>
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
                                    <a href="thong-tin-giang-vien"><button type="button" class="btn btn-primary btn-lg btn-block">Thông tin giảng viên </button></a>
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

@section('js')

<script type="text/javascript">
    var demChuong=2;
    $("#thembaigiang").click(function () {
        var html = '';
        html += '<br><div id="inputFormBaiGiang">';
        html += '<div>';
            html += '<label for="tenchuong">Chương '+ demChuong +'</label>';
            html += '<input type="text" name="Chuong '+ demChuong +' " class="form-control m-input" placeholder="Tên chương" autocomplete="off">';
        html += '</div>';
        html += '</div>';
        $('#newbaigiang').append(html);
        demChuong++;
    });
     $(document).on('click', '#xoabaigiang', function () {
        $(this).closest('#inputFormBaiGiang').remove();
    });
</script>
@endsection

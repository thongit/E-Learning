@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Quảng lý bài kiểm tra</h1>
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
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên chương</th>
                                <th>Tên bài kiểm tra</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Chương ẻwerwerwerewrwerwer</td>
                            <td>bài 2135475474574724</td>
                            <td>
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-primary">Sửa</button>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-info">Xuất File XML</button>
                            </td>
                            <td>                               
                                <button type="submit" class="btn btn-info">Xuất File Excel</button>
                             </td>
                        </tr>

                        </tbody>
                    </table>
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

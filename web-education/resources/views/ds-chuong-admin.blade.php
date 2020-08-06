@extends('layout-admin')
@section('content-admin')
<div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Khóa học</h3>
            <ul>
                <li>Danh sách chương</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Fees Table Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table data-table text-nowrap">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Tên chương</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($chuongs as $item)
                            <tr>
                                <td></td>
                                <td><a href="/admin/bai-giang/{{$item->id}}">{{$item->ten_chuong}}</a></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div>
                </div>
            </div>
        </div>
        <!-- Fees Table Area End Here -->
        <footer class="footer-wrap-layout1">
            <div class="copyright">© Copyrights <a href="#">QTTT</a>
            </div>
        </footer>
    </div>
@endsection
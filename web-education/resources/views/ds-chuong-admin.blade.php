@extends('layout-admin')
@section('content-admin')
<div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Accounts</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Fees Collection</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Fees Table Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Tất cả khóa học</h3>
                    </div>
                </div>
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
            <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
        </footer>
    </div>
<script>
function thongbaoxoa($id) {
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
            $url='/admin/ds-khoa-hoc/'+$id;
            open($url,"_self") 
        }
    })
}
</script>
@endsection
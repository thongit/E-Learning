@extends('layout-admin')
@section('content-admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    function thanhToan(id, tien)
    {
        Swal.fire({
        title: 'Xác nhận đã thanh toán <br>'+ new Intl.NumberFormat('ja-JP').format(tien) +' VNĐ cho giảng viên?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Đã thanh toán',
        cancelButtonText:'Không'
        }).then((result) => {
            if (result.value) {
                $(document).ready(function(){
                    $.ajax({
                        url: '/thanh-toan-cho-gv',
                        method:"GET",
                        data:{
                            idND: id,
                            _token : '<?php echo csrf_token() ?>'
                        },
                        success:function(data){
                            if(data.msg == 1)
                            {
                                $('#tt'+id).text("0 VNĐ");
                                $('#thanhToan'+id).prop("disabled",true);
                                $('#nhacNho'+id).prop("disabled",true);
                                Swal.fire(
                                    'Hoàn tất!',
                                    '',
                                    'success'
                                );
                            }
                            else
                            {
                                Swal.fire(
                                    'Thất bại!',
                                    '',
                                    'error'
                                )
                            }
                        }
                    });
                });
            }
        });
    };

    function nhacNho(id)
    {
        Swal.fire({
        title: 'Nhắc nhở giảng viên thanh toán tiền cho hệ thống?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Nhắc nhở',
        cancelButtonText:'Không'
        }).then((result) => {
            if (result.value) {
                $(document).ready(function(){
                    $.ajax({
                        url: '{{route("nhac-nho-thanh-toan")}}',
                        method:"GET",
                        data:{
                            idND: id,
                            _token : '<?php echo csrf_token() ?>'
                        },
                        success:function(data){
                            if(data.msgnn == 1)
                            {
                                $('#nhacNho'+id).prop("disabled",true);
                                Swal.fire(
                                    'Hoàn thành!',
                                    '',
                                    'success'
                                );
                            }
                            else
                            {
                                Swal.fire(
                                    'Thất bại!',
                                    '',
                                    'error'
                                )
                            }
                        }
                    });
                });
            }
        });
    };
    
    $(document).ready(function(){
        
        $("#ten").change(function(){
            console.log(ten);
            timkiem();
        });

        function timkiem(){
            var ten = $("#ten").val();
            $.ajax({
                url:"/admin/ds-doanh-thu-gv",
                method:"GET",
                data:{
                    ten:ten,
                    _token : '<?php echo csrf_token() ?>'
                },
                success:function(data){
                    $(".dtgv").html(data);
                }
            });
        };

        $('#myModal').on('show.bs.modal', function(e) {
            var id = $(e.relatedTarget).data('thongtin');
            var nh = $(e.relatedTarget).data('nganhang');
            var tc = $(e.relatedTarget).data('tochuc');
            $(".modal-body #email").text(id.email);
            if(tc == "khong")
            {
                $(".modal-body #nametc").text("Không có tổ chức");
            }
            else
            {
                $(".modal-body #nametc").text(tc);
            }
            $(".modal-body #name").text(id.ho_ten);
            $(".modal-body #stk").text(nh.so_tai_khoan);
            $(".modal-body #ttt").text(nh.ten_tren_the);
            $(".modal-body #cn").text(nh.chi_nhanh);
            $(".modal-body #sdt").text(id.sdt);
            $(".modal-body #nh").text(nh.ten_ngan_hang);
            $(".modal-body #dchi").text(id.dia_chi);
        });

        function laydl(page)
        {
            var ten = $("#ten").val();
            $.ajax({
                url: '/admin/ds-doanh-thu-gv-pagin?page='+page,
                method:"GET",
                data:{
                    ten:ten,
                    _token : '<?php echo csrf_token() ?>'
                },
                success:function(data){
                    $(".dtgv").html(data);
                }
            });
        }

        $(document).on('click','.pagination a', function(e){
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            laydl(page);
        });
    });
</script>
<style>
.dataTables_paginate {
    display: none;
}
</style>
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Giảng viên</h3>
        <ul>
            <li>Danh sách giảng viên</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-search" aria-hidden="true"></i>
        </span>	
        <input style="font-size: initial;" id="ten" class="form-control" aria-label="Tìm kiếm" placeholder="Tìm kiếm">
    </div>
    <!-- Student Table Area Start Here -->
    <div class="card height-auto">
        <div class="card-body dtgv">
            @include('doanhthugv')
        </div>
    </div>
    <!-- Student Table Area End Here -->
    
  <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
      <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thông tin giảng viên</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <table style="width:100%">
                        <tr style="border-bottom: solid 2px;">
                            <th style="width:30%">Tên giảng viên:</th>
                            <td><span id="name"></span></td>
                        </tr>
                        <tr style="border-bottom: solid 2px;">
                            <th style="width:30%">Tên tổ chức:</th>
                            <td><span id="nametc"></span></td>
                        </tr>
                        <tr style="border-bottom: solid 2px;">
                            <th style="width:30%">Email:</th>
                            <td><span id="email"></span></td>
                        </tr>
                        <tr style="border-bottom: solid 2px;">
                            <th style="width:30%">SĐT:</th>
                            <td><span id="sdt"></span></td>
                        </tr>
                        <tr style="border-bottom: solid 2px;">
                            <th style="width:30%">Địa chỉ:</th>
                            <td><span id="dchi"></span></td>
                        </tr>
                        <tr style="border-bottom: solid 2px;">
                            <th style="width:30%">Số TK:</th>
                            <td><span id="stk"></span></td>
                        </tr>
                        <tr style="border-bottom: solid 2px;">
                            <th style="width:30%">Tên trên thẻ:</th>
                            <td><span id="ttt"></span></td>
                        </tr>
                        <tr style="border-bottom: solid 2px;">
                            <th style="width:30%">Ngân hàng:</th>
                            <td><span id="nh"></span></td>
                        </tr>
                        <tr>
                            <th style="width:30%">Chi nhánh:</th>
                            <td><span id="cn"></span></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-wrap-layout1">
        <div class="copyright">© Copyrights <a href="#">QTTT</a>
        </div>
    </footer>
</div>
@endsection
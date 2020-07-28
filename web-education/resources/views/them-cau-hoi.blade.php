@extends('layout')
@section('content')
@include('header')
<!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Thêm Câu Hỏi</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
<div id="tao_noi_dung" class="margin-themcauhoi">
    <form method="post" action="{{ route('ghi-file') }}" role="form">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-sm-2 col-md-2 col-lg-2"></div>
            <div class="col-sm-8 col-md-8 col-lg-8">
                <div id="newquestion">
                <div id="inputFormRow">
                    <div class="form-group">
                        <label for="tenchuong">Câu Hỏi Thứ 1</label>
                        <input type="text" name="noiDung1" class="form-control m-input" placeholder="Nhập câu hỏi" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="text" name="dapAnA1" class="form-control m-input" placeholder="Nhập Đáp Án A" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="text" name="dapAnB1" class="form-control m-input" placeholder="Nhập Đáp Án B" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="text" name="dapAnC1" class="form-control m-input" placeholder="Nhập Đáp Án C" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="text" name="dapAnD1" class="form-control m-input" placeholder="Nhập Đáp Án D" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="sel1">Đáp án đúng</label>
                      <select class="form-control" id="dap-an" name="dapAnDung1">
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                        <option>D</option>
                      </select>
                    </div>
                    </div>
                    
                </div>
                <div class="margin-themcauhoi">
                    <button id="themcauhoi" type="button" class="btn btn-info">Thêm Câu Hỏi</button>
                    <button type="submit" class="btn btn-success">Lưu lại</button>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2"></div>
        </div>
    </form>
    </div>

@endsection
@section('js')
<!-- Javascript xử lý nút thêm câu hỏi
    ============================================= -->
<script type="text/javascript">
    var i = 1;
    $("#themcauhoi").click(function () {
        var html = '';
        html += '<br><div id="inputFormCauHoi">';
        html += '<div class="input-group">';
            html += '<label for="motacauhoi">Câu Hỏi Thứ  '+ ++i +'</label>';
            html += '<div class="form-group">';
                html += '<input type="text" name="noiDung'+ i +'" class="form-control m-input" placeholder="Nhập Câu Hỏi"  style = "margin: 20px">';
            html += '</div>';
            html += '<div class=" form-group input-group-btn">';
                html += '<button id="XoaCauHoi" type="button" class="btn btn-danger">X</button>';
            html += '</div>';
        html += '</div>';
        html += '<div class="form-group">';
            html += '<input type="text" name="dapAnA'+ i +'" class="form-control m-input" placeholder="Nhập Đáp Án A">';
        html += '</div>';
        html += '<div class="form-group">';
            html += '<input type="text" name="dapAnB'+ i +'" class="form-control m-input" placeholder="Nhập Đáp Án B">';
        html += '</div>';
        html += '<div class="form-group">';
            html += '<input type="text" name="dapAnC'+ i +'" class="form-control m-input" placeholder="Nhập Đáp Án C">';
        html += '</div>';
        html += '<div class="form-group">';
            html += '<input type="text" name="dapAnD'+ i +'" class="form-control m-input" placeholder="Nhập Đáp Án D">';
        html += '</div>';
        html += '<div class="form-group">';
          html += '<label for="sel1">Đáp án đúng</label>';
          html += '<select class="form-control" id="dap-an" name="dapAnDung'+ i +'">';
            html += '<option>A</option>';
            html += '<option>B</option>';
            html += '<option>C</option>';
            html += '<option>D</option>';
          html += '</select>';
        html += '</div>';
        // html += '<div class="form-group">';
            //html += '<label for="uploadtailieu">Upload Tài liệu</label>';
            //html += '<input type="file" class="form-control-file border" name="uploadtailieu">';
        //html += '</div>';

        html += '</div>';

        $('#newquestion').append(html);
    });

     $(document).on('click', '#XoaCauHoi', function () {
        $(this).closest('#inputFormCauHoi').remove();
    });
</script>
@endsection



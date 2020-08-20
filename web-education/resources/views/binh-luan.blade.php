<div class="thao-luan">
    @foreach($binhLuan as $bl)
    <article class="row">
        <div class="col-md-2 col-sm-2 hidden-xs">
            <figure class="thumbnail">
                <img class="img-responsive" src="{{ asset('assets/images/'.$bl->nguoiDung->anh_dai_dien) }}" />
            </figure>
            </div>
            <div class="col-md-10 col-sm-10">
            <div class="panel panel-default arrow left">
                <div class="panel-body">
                    @if($bl->nguoi_dung_id == $bl->noiDung->Chuong->khoaHoc->nguoi_dung_id)
                    <h4 style="color: #CC0000;font-weight: 700;">Giảng viên</h4>
                    @else
                    <h4>{{$bl->nguoiDung->ho_ten}}</h4>
                    @endif
                <header class="text-left">
                    <time class="comment-date">{{date_format($bl->created_at, 'H:i:s, d/m/Y')}}
                        <i class="fa fa-clock-o"></i></time>
                </header>
                <div class="comment-post">
                    <label for="">{{$bl->noi_dung}}</label>
                </div>
                </div>
            </div>
        </div>
    </article>
    @endforeach
</div>
<div style="display: flex;justify-content: center;">
    <?php echo $binhLuan->render(); ?>
</div>
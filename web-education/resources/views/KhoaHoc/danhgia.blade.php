@foreach($danhGia as $dg)
<article class="row">
    <div class="col-md-2 col-sm-2 hidden-xs">
        <figure class="thumbnail">
            <img class="img-responsive" src="{{ asset('assets/images/'.$dg->nguoiDung->anh_dai_dien) }}" />


        </figure>
        </div>
        <div class="col-md-10 col-sm-10">
        <div class="panel panel-default arrow left">
            <div class="panel-body">
                <div style="display: flex; justify-content: space-between; align-items: baseline;">
                    <h4>{{$dg->nguoiDung->ho_ten}}</h4>
                    <time class="comment-date">{{date_format($dg->nguoiDung->created_at, 'H:i:s, d/m/Y')}}<i class="fa fa-clock-o"></i></time>
                </div>
                <header class="text-left">
                    <div class="average-rating" style="color: #ffb606">
                        @for($i = 0; $i< $dg->so_sao; $i++)
                        <i class="fas fa-star"></i>
                        @endfor
                    </div>
                </header>
                <div class="comment-post">
                    <label for="">{{$dg->noi_dung}}</label>
                </div>
            </div>
        </div>
    </div>
</article>
@endforeach
<div style="display: flex;justify-content: center;">
    <?php echo $danhGia->render(); ?>
</div>
<div class="row">
    <div class="advisor-items col-3 text-light text-center">
        <!-- Single item -->
        @if($giangviens->count() > 0)
            @foreach($giangviens as $gv)
            <div class="col-md-4 col-sm-6 single-item">
                <div class="item">
                    <div class="thumb">
                        <a href="{{ action('KhoaHocController@chiTietGiangVien' , $gv->id) }}"><img src="{{ asset('assets/images/'.$gv->anh_dai_dien) }}" alt="Thumb"></a>
                    </div>
                    <div class="info">
                        <h4><a class="lam-gon-ten" style="width:320px" href="{{ action('KhoaHocController@chiTietGiangVien' , $gv->id) }}">@if($gv->toChuc->count() > 0) {{ $gv->toChuc[0]->ten_to_chuc }} @else {{ $gv->ho_ten }} @endif</a></h4>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <h4 style="text-align:center;"><p style="color:#002147">Không tìm thấy!</p></h4>
        @endif
        <!-- End Single item -->
    </div>
</div>
<div style="display: flex;justify-content: center;">
    <?php echo $giangviens->render(); ?>
</div>
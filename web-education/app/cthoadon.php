<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class cthoadon extends Model
{
    protected $table ="ct_hoa_don";
    use SoftDeletes;

     public function hoaDon()
    {
        return $this->belongsTo('App\hoadon','hoa_don_id');
    }

    public function khoaHoc()
    {
        return $this->belongsTo('App\khoahoc','khoa_hoc_id');
    }
}

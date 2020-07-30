<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cthoadon extends Model
{
    protected $table ="ct_hoa_don";
    
     public function hoaDon()
    { 
        return $this->belongsTo('App\hoadon','hoa_don_id');
    }

    public function khoaHoc()
    {
        return $this->belongsTo('App\khoahoc','khoa_hoc_id');
    }
}

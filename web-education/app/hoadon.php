<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
     protected $table ="hoa_don";

     public function nguoiDung()
     {
          return $this->belongsTo('App\nguoidung','nguoi_dung_id','id');
     }

     public function ctHoaDon()
     {
          return $this->hasMany('App\cthoadon','hoa_don_id','id');
     }
}

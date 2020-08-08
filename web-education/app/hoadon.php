<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class hoadon extends Model
{
     protected $table ="hoa_don";
     use SoftDeletes;

     public function nguoiDung()
     {
          return $this->belongsTo('App\nguoidung','nguoi_dung_id','id');
     }

     public function ctHoaDon()
     {
          return $this->hasMany('App\cthoadon','hoa_don_id','id');
     }
}

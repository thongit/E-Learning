<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ketquakt extends Model
{
     use SoftDeletes;
     protected $table ="ket_qua_kt";

     public function baiKiemTra()
     {
          return $this->belongsTo('App\baikiemtra');
     }

     public function nguoiDung()
     {
          return $this->belongsTo('App\nguoidung');
     }
}

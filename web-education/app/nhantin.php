<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhantin extends Model
{
     protected $table ="nhan_tin";

     public function khoaHoc()
     {
          return $this->belongsTo('App\khoahoc');
     }

     public function nguoiDung()
     {
          return $this->belongsTo('App\nguoidung');
     }
}

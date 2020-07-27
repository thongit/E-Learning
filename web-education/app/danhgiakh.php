<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhgiakh extends Model
{
     protected $table ="danh_gia_kh";

     public function khoaHoc()
     {
          return $this->belongsTo('App\khoahoc','khoa_hoc_id');
     }

     public function nguoiDung()
     {
          return $this->belongsTo('App\nguoidung');
     }
}

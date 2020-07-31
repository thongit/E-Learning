<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tochuc extends Model
{
     protected $table ="to_chuc";

     public function nguoiDung()
     {
          return $this->belongsTo('App\nguoidung','nguoi_dung_id');
     }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class linhvuc extends Model
{
   protected $table ="linh_vuc";

   public function khoaHoc()
   {
      return $this->hasMany('App\khoahoc','khoa_hoc_id');
   }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khoahoc extends Model
{
     protected $table ="khoa_hoc";
     public function LinhVuc()
    {
        return $this->belongsTo('App\linhvuc');
    }

    //  public function linhVuc()
    //  {
    //     return $this->belongsTo('App\linhvuc','linh_vuc_id','id');
    //  }
}

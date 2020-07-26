<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baikiemtra extends Model
{
     protected $table ="bai_kiem_tra";

     public function Chuong()
     {
          return $this->belongsTo('App\chuong');
     }

     public function ketQuaKT()
    {
        return $this->hasMany('App\ketquakt');
    }
}

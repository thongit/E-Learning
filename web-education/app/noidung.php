<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noidung extends Model
{
     protected $table ="noi_dung";
     public function Chuong()
    {
        return $this->belongsTo('App\chuong','chuong_id');
    }
}

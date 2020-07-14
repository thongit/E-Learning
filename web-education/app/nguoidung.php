<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
class nguoidung extends Authenticatable
{
     protected $table ="nguoi_dung";
     public function getPasswordAttribute()
    {
        return $this->mat_khau;
    }
}

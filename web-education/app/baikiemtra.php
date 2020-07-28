<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baikiemtra extends Model
{
    protected $table ="bai_kiem_tra";

    public function Chuong()
    {
        return $this->belongsTo('App\chuong','chuong_id');
    }

    public function ketQuaKT()
    {
        return $this->hasMany('App\ketquakt','bai_kiem_tra_id');
    }
}

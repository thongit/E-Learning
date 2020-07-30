<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class baikiemtra extends Model
{
    use SoftDeletes;

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

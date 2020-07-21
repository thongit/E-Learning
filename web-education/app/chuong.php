<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chuong extends Model
{
    protected $table ="chuong";
    public function KhoaHoc()
    {
        return $this->belongsTo('App\khoahoc');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chuong extends Model
{
    protected $table ="chuong";
    public function KhoaHoc()
    {
        return $this->belongsTo('App\khoahoc','khoa_hoc_id');
    }

    public function noiDung()
    {
        return $this->hasMany('App\noidung','chuong_id');
    }

    public function baiKiemTra()
    {
        return $this->hasMany('App\baikiemtra','chuong_id');
    }
}

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

    public function ketQuaKT()
    {
        return $this->hasMany('App\ketquakt');
    }

    public function nhanTin()
    {
        return $this->hasMany('App\nhantin');
    }

    public function danhGiaKH()
    {
        return $this->hasMany('App\danhgiakh');
    }

    public function khoaHoc()
    {
        return $this->hasMany('App\khoahoc','nguoi_dung_id');
    }

    public function hoaDon()
    {
        return $this->hasMany('App\hoadon');
    }

    public function toChuc()
    {
        return $this->hasMany('App\tochuc');
    }

    public function theNganHang()
    {
        return $this->hasMany('App\thenganhang');
    }
}

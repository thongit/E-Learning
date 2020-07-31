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
        return $this->hasMany('App\ketquakt','nguoi_dung_id');
    }

    public function nhanTin()
    {
        return $this->hasMany('App\nhantin','nguoi_dung_id');
    }

    public function danhGiaKH()
    {
        return $this->hasMany('App\danhgiakh','nguoi_dung_id');
    }

    public function khoaHoc()
    {
        return $this->hasMany('App\khoahoc','nguoi_dung_id');
    }

    public function hoaDon()
    {
        return $this->hasMany('App\hoadon','nguoi_dung_id');
    }

    public function toChuc()
    {
        return $this->hasMany('App\tochuc','nguoi_dung_id');
    }

    public function theNganHang()
    {
        return $this->hasMany('App\thenganhang','nguoi_dung_id');
    }
}

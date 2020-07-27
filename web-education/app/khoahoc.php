<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khoahoc extends Model
{
    protected $table ="khoa_hoc";

    public function LinhVuc()
    {
        return $this->belongsTo('App\linhvuc','linh_vuc_id','id');
    }
    public function ctHoaDon()
    {
        return $this->hasMany('App\cthoadon','khoa_hoc_id');
    }

    public function danhGiaKH()
    {
        return $this->hasMany('App\danhgiakh','khoa_hoc_id');
    }

    public function nhanTin()
    {
        return $this->hasMany('App\nhantin','khoa_hoc_id');
    }

    public function nguoiDung()
     {
          return $this->belongsTo('App\nguoidung','nguoi_dung_id');
     }

    public function dsChuongBai()
    {
        return $this->hasManyThrough('App\noidung', 'App\chuong', 'khoa_hoc_id', 'chuong_id', 'id', 'id');
    }

    public function Chuong()
    {
        return $this->hasMany('App\Chuong', 'khoa_hoc_id', 'id');
    }

    public function giangVien()
    {
        return $this->belongsTo('App\nguoidung','nguoi_dung_id','id');
    }

}

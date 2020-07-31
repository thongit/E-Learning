<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thaoluan extends Model
{
    protected $table ="thao_luan";

    public function noiDung()
    {
        return $this->belongsTo('App\noidung','noi_dung_id','id');
    }
}

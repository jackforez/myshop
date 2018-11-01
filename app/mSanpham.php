<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mSanpham extends Model
{
    protected $table = "tblSanpham";
    public function loaisp(){
        return $this->belongsTo('App\mLoaisp','maloaisp','id');
    }
}

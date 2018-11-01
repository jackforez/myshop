<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mLoaisp extends Model
{
    protected $table = "tblLoaisp";
    public function sanpham(){
        return $this->hasMany('App\mSanPham','maloaisp','id');
    }
}

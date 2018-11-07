<?php

namespace App\Http\Controllers;
use App\mSanpham;
use App\mSlide;
use DB;
use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function getTrangchu(){
        $sanpham = mSanpham::where('giasp','>',0)->paginate(12);
        $slide = mSlide::all();
        return view('page.trangchu',['sanpham'=>$sanpham,'slide'=>$slide]);
        
    }
    public function getChitiet($id){
        $sanpham = mSanpham::find($id);
        return view('page.chitiet',['sanpham'=>$sanpham]);
    }
}

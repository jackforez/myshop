<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mBaiviet;
class cBaiviet extends Controller
{
    public function getList(){
        $baiviet= mBaiviet::where('id','>',0)->paginate(5);
        return view('admin.baiviet.danhsach',['baiviet'=>$baiviet]);
    }
    public function getEdit(){

    }
    public function getAdd(){
        return view('admin.baiviet.them');
    }
    public function postList(){

    }
    public function postEdit(){

    }
    public function postAdd(Request $req){
        $baiviet = new mBaiviet;
        $baiviet->tieude = $req->tieude;
        $baiviet->noidung = $req->noidung;
        $baiviet->save();
        
        return redirect('admin/baiviet/them')->with('thongbao','Thêm thành công !');
    }
}

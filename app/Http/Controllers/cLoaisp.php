<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mLoaisp;

class cLoaisp extends Controller
{
    public function getList(){
        // $loaisp = mLoaisp::all()->paginate(4);
        $loaisp = mLoaisp::where('id','>',0)->paginate(10);
        return view('admin.loaisp.danhsach',['loaisp'=>$loaisp]);
    }

    public function getAdd(){
        return view('admin.loaisp.them');
    }
    public function postAdd(Request $req){
        // $this->validate($req,[
        //     'ten'=>'required|min:3|max:100|unique:tblLoaisp,tenloaisp'
        // ],
        // [
        //     'ten.required'=>'Chưa nhập tên sản phẩm',
        //     'ten.min'=>'Tên quá ngắn, độ dài 3-100 ký tự',
        //     'ten.max'=>'tên quá dài, độ dài 3-100 ký tự',
        //     'ten.unique'=>'ten da co'
        // ]);
        $loaisp = new mLoaisp;
        $loaisp->tenloaisp = $req->ten;
        $loaisp->save();

        return redirect('admin/loaisp/them')->with('thongbao','Thêm thành công rồi !');
    }
    
    public function getEdit($id){
        $loaisp = mLoaisp::find($id);
        return view('admin.loaisp.sua',['loaisp'=>$loaisp]);
        
    }
    public function postEdit(Request $req,$id){
        $this->validate($req,[
            'ten'=>'required|min:3|max:100'
        ],
        [
            'ten.required'=>'Chưa nhập tên loại sản phẩm',
            'ten.min'=>'Tên quá ngắn, độ dài 3-100 ký tự',
            'ten.max'=>'tên quá dài, độ dài 3-100 ký tự'
        ]);
        $loaisp = mLoaisp::find($id);
        $loaisp->tenloaisp = $req->ten;
        $loaisp->save();
        return redirect('admin/loaisp/sua/'.$id)->with('thongbao','Sửa thành công!');
    }
    public function getDelete($id){
        $loaisp = mLoaisp::find($id);
        $loaisp->delete();
        return back()->with('thongbao','Xóa thành công!');
    }
    public function postDelete(){

    }
}

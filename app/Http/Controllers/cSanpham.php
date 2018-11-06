<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mSanpham;
use App\mLoaisp;
use DB;
class cSanpham extends Controller
{
    // danh cho front
    public function fgetList(){
        $sanpham = mSanpham::where('id','>',0)->paginate(20);
        return view('page.danhsachsp',['sanpham'=>$sanpham]);
    }

    public function getList(){
        // $sanpham = mSanpham::where('id','>',0)->paginate(10);
        $sanpham = DB::table('tblSanpham')
                ->join('tblLoaisp','tblSanpham.maloaisp','=','tblLoaisp.id')
                ->select('tblSanpham.*','tblLoaisp.tenloaisp')
                ->paginate(5);
        return view('admin.sanpham.danhsach',['sanpham'=>$sanpham]);
    }

    public function getAdd(){
        $loaisp = mLoaisp::all();
        return view('admin.sanpham.them',['loaisp'=>$loaisp]);
    }
    public function postAdd(Request $req){

        $this->validate($req,[
            'ten'=>'required|unique:tblSanpham,tensp|min:3|max:100|',
        ],
        [
            'ten.ruquired'=>'Chưa nhập tên sản phẩm',
            'ten.min'=>'Tên quá ngắn, độ dài 3-100 ký tự',
            'ten.max'=>'tên quá dài, độ dài 3-100 ký tự',
            'ten.unique'=>'tên đã có'   
        ]);
        $sp = new mSanpham;
        $sp->tensp = $req->ten;
        $sp->maloaisp = $req->loai;
        $sp->giasp = $req->gia;
        $sp->giakm = $req->km;
        $sp->mota = $req->mota;
        if($req->hasFile('hinh'))
            {
                $file = $req->file('hinh');
                $fname = $file->getClientOriginalName();
                $hinh = str_random(4)."__".$fname;
                while(file_exists('upload/'.$hinh)){
                    $hinh = str_random(4)."__".$fname;
                }
                $file->move('upload',$hinh);
                $sp->img = $hinh;
            }
        else{
            $sp->img = "";
        }
        if($req->hasFile('hinh1'))
            {
                $file = $req->file('hinh1');
                $fname = $file->getClientOriginalName();
                $hinh = str_random(4)."__".$fname;
                while(file_exists('upload/'.$hinh)){
                    $hinh = str_random(4)."__".$fname;
                }
                $file->move('upload',$hinh);
                $sp->img1 = $hinh;
            }  
            else{
                $sp->img1 = "";
            }                      
            
            if($req->hasFile('hinh2'))
            {
                $file = $req->file('hinh2');
                $fname = $file->getClientOriginalName();
                $hinh = str_random(4)."__".$fname;
                while(file_exists('upload/'.$hinh)){
                    $hinh = str_random(4)."__".$fname;
                }
                $file->move('upload',$hinh);
                $sp->img2 = $hinh;
            }
            else{
                $sp->img2 = "";
            }    
            
        $sp->save();
        return redirect('admin/sanpham/them')->with('thongbao','Thêm thành công rồi !');
   }

   public function getEdit($id){
        $loaisp = mLoaisp::all();
        $sanpham = mSanpham::find($id);
        return view('admin.sanpham.sua',[
            'sanpham'=>$sanpham,
            'loaisp'=>$loaisp
        ]);
        
    }
    public function postEdit(Request $req,$id){
        $this->validate($req,[
            'ten'=>'required|min:3|max:100'
        ],
        [
            'ten.required'=>'Chưa nhập tên sản phẩm',
            'ten.min'=>'Tên quá ngắn, độ dài 3-100 ký tự',
            'ten.max'=>'tên quá dài, độ dài 3-100 ký tự'
        ]);
        $sp = mSanpham::find($id);
        $sp->tensp = $req->ten;
        $sp->maloaisp = $req->loai;
        $sp->giasp = $req->gia;
        $sp->giakm = $req->km;
        $sp->mota = $req->mota;
        if($req->hasFile('hinh'))
            {
                $file = $req->file('hinh');
                $fname = $file->getClientOriginalName();
                $hinh = str_random(4)."__".$fname;
                while(file_exists('upload/'.$hinh)){
                    $hinh = str_random(4)."__".$fname;
                }
                $file->move('upload',$hinh);
                $sp->img = $hinh;
            }
        else{
            $sp->img = "";
        }
        if($req->hasFile('hinh1'))
            {
                $file = $req->file('hinh1');
                $fname = $file->getClientOriginalName();
                $hinh = str_random(4)."__".$fname;
                while(file_exists('upload/'.$hinh)){
                    $hinh = str_random(4)."__".$fname;
                }
                $file->move('upload',$hinh);
                $sp->img1 = $hinh;
            }  
            else{
                $sp->img1 = "";
            }                      
            
            if($req->hasFile('hinh2'))
            {
                $file = $req->file('hinh2');
                $fname = $file->getClientOriginalName();
                $hinh = str_random(4)."__".$fname;
                while(file_exists('upload/'.$hinh)){
                    $hinh = str_random(4)."__".$fname;
                }
                $file->move('upload',$hinh);
                $sp->img2 = $hinh;
            }
            else{
                $sp->img2 = "";
            }    
            
        $sp->save();
        return redirect('admin/sanpham/danhsach')->with('thongbao','Sửa thành công rồi !');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\mSlide;
class cSlide extends Controller
{
    public function getList(){
        $slide = mSlide::where('id','>',0)->paginate(10);
        return view('admin.slide.danhsach',['slide'=>$slide]);
    }
    public function postList(){

    }
    
    public function getAdd(){
        return view('admin.slide.them');
    }
    public function postAdd(Request $r){
        $this->validate($r,
        [
            'slogan'=>'required|min:3|max:100'
        ],
        [   
            'slogan.required'=>'Bắt buộc phải nhập slogan cho ảnh Slide',
            'slogan.min'=>'slogan này quá ngắn, độ dài cho phép 3-100 ký tự',
            'slogan.max'=>'slogan này quá dài, độ dài cho phép 3-100 ký tự'
        ]);
        $slide = new mSlide;
        $slide->slogan = $r->slogan;
        if($r->hasFile('hinh'))
        {
            $file = $r->file('hinh');
            $fname = $file->getClientOriginalName();
            $hinh = str_random(4)."_sl_".$fname;
            while(file_exists('upload/'.$hinh)){
                $hinh = str_random(4)."_sl_".$fname;
            }
            $file->move('upload/slides',$hinh);
            $slide->link = $hinh;
        }
        
    else{
        $hinh = "";
    }
    
    $slide->save();
    return redirect('admin/slide/them')->with('thongbao','Thêm thành công rồi !');
    }
    public function getEdit($id){
        $slide = mSlide::find($id);
        return view('admin.slide.sua',['slide'=>$slide]);
    }
    public function postEdit(Request $r,$id){
        $this->validate($r,
        [
            'slogan'=>'required|min:3|max:100'
        ],
        [   
            'slogan.required'=>'Bắt buộc phải nhập slogan cho ảnh Slide',
            'slogan.min'=>'slogan này quá ngắn, độ dài cho phép 3-100 ký tự',
            'slogan.max'=>'slogan này quá dài, độ dài cho phép 3-100 ký tự'
        ]);
        $slide = mSlide::find($id);
        $slide->slogan = $r->slogan;
        if($r->hasFile('hinh'))
        {
            $file = $r->file('hinh');
            $fname = $file->getClientOriginalName();
            $hinh = str_random(4)."_sl_".$fname;
            while(file_exists('upload/'.$hinh)){
                $hinh = str_random(4)."_sl_".$fname;
            }
            $file->move('upload/slides',$hinh);
            $slide->link = $hinh;
        }
        
    else{
        $hinh = "";
    }
    
    $slide->save();
    return redirect('admin/slide/sua/'.$id)->with('thongbao','Sửa thành công!');
    }
    
    public function getDelete($id){
        $slide = mSlide::find($id);
        $slide->delete();
        return back()->with('thongbaoxoa','Xóa thành công!');
    }
}

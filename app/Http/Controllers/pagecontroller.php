<?php

namespace App\Http\Controllers;
use App\mSanpham;
use App\mSlide;
use App\Cart;
use DB;
use Session;
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
    public function getAddToCart(Request $req,$id){
        $data = mSanpham::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($data,$id);
        $req->Session()->put('cart',$cart);
       return redirect()->back();

    }
}

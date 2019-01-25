<?php

namespace App\Http\Controllers;
use App\mSanpham;
use App\mSlide;
use App\mLoaisp;
use App\Cart;
use DB;
use Session;
use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function getTrangchu(){
        $sanpham = mSanpham::where('giasp','>',0)->paginate(12);
        $slide = mSlide::all();
        $loaisp = mLoaisp::all();
        return view('page.trangchu',['sanpham'=>$sanpham,'slide'=>$slide,'loaisp'=>$loaisp]);
        
    }
    public function getChitiet($id){
        $sanpham = mSanpham::find($id);
        $tuongtu = mSanpham::where('maloaisp','=',$sanpham->maloaisp);
        return view('page.chitiet',['sanpham'=>$sanpham,'tuongtu'=>$tuongtu]);
    }
    public function getAddToCart(Request $req,$id){
        $data = mSanpham::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($data,$id,1);
        $req->Session()->put('cart',$cart);
       return redirect()->back();
    }
    public function postAddToCart(Request $req,$id){
        $data = mSanpham::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($data,$id,$req->num);
        $req->Session()->put('cart',$cart);
       return redirect()->back();
    }
    public function getDelItem($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeAll($id);
		if(count($cart->items)>0){
			Session::put('cart',$cart);
		}else{
            Session::forget('cart');
		}
        return redirect()->back();
    }
    public function getThanhtoan(){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        return view('page.thanhtoan',['mycart'=>$cart->items,'tongtien'=>$cart->totalPrice,'tongsl'=>$cart->totalQty]);

    }    
    public function postThanhtoan(){

    }
}

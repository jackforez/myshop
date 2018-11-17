<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Cart;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $loaisp= mLoaisp::all();
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
            }
            $view->with(['loaisp',$loaispm,'cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

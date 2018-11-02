<?php

Route::get('/', function () {
    return view('welcome');
});

// Route::get('trangchu',[
//     'as'=>'trang-chu',
//     'uses'=>'myctl@gTrangchu'
// ]);
Route::get('trangchu', function(){
    return view('page.layout.index');
});
Route::get('trangad',function(){
    return view('admin.layout.index');
});

Route::group(['prefix'=>'page'],function(){
    Route::get('danhsach','cSanpham@fgetList');

});

Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'loaisp'],function(){
        Route::get('danhsach','cLoaisp@getList');
        
        Route::get('them','cLoaisp@getAdd');
        Route::post('them','cLoaisp@postAdd');

        Route::get('sua/{id}','cLoaisp@getEdit');
        Route::post('sua/{id}','cLoaisp@postEdit');
    });
    
    Route::group(['prefix'=>'sanpham'],function(){
        Route::get('danhsach','cSanpham@getList');
        
        Route::get('them','cSanpham@getAdd');
        Route::post('them','cSanpham@postAdd');

        Route::get('sua/{id}','cSanpham@getEdit');
        Route::post('sua/{id}','cSanpham@postEdit');
    });
});
?>
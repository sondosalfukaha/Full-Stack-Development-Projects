<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {

    $result = DB::table('categories')/*->where('name','كاميرات')*/->get();
    return view('/welcome',['categories' => $result]);
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/product/{catid?}', function ($catid = null) {
    if($catid == null){
        $result = DB::table('products')->get();
    }

    $result = DB::table('products')->where('category_id' ,$catid )->get();
    return view('product',['products' => $result]);
});

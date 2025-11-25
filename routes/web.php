<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


//Route for Shop list
Route::get('/shop-list',[ShopController::class,'index'])->name('shop.index');
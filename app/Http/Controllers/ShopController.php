<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    //Shop  list
    public function index(){
        $shopList = DB::table('shops')->get();
        return view('shops.index',compact('shopList'));
    }
}

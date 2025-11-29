<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    //Shop  list
    public function index()
    {
        $shopList = DB::table('shops')->get();
        return view('shops.index', compact('shopList'));
    }

    //create shop
    public function create()
    {
        return view('shops.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            //validate form data
            'shop_name' => 'required|max:255|unique:shops',
            'shop_number' => 'required|max:255',
            'shop_address' => 'required|max:255',
            'shop_phone' => 'required|max:255',
            'shop_email' => 'required|email|max:55',
            'shop_TIN' => 'required|max:25'
        ]);

        // insert data into database table
        DB::table('shops')->insert([
            'shop_name' => $request->shop_name,
            'shop_number' => $request->shop_number,
            'shop_address' => $request->shop_address,
            'shop_phone' => $request->shop_phone,
            'shop_email' => $request->shop_email,
            'shop_TIN' => $request->shop_TIN,
            'created_at' => now(),
        ]);

        return redirect()->route('shop.index')->with('success', 'Shop created successfully');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('shops')->insert([
        //     [
        //         'shop_name' => 'My Shop',
        //         'shop_number' => 1,
        //         'shop_address' => 'Dhaka',
        //         'shop_phone' => 1235,
        //         'shop_email' => 'myshop@gmail.com',
        //         'shop_TIN' => '124',
        //         'created_at' => now(),
        //     ],
        //     [
        //         'shop_name' => 'Another Shop',
        //         'shop_number' => 2,
        //         'shop_address' => 'Dhaka',
        //         'shop_phone' => 1234,
        //         'shop_email' => 'anothershop@gmail.com',
        //         'shop_TIN' => '124',
        //         'created_at' => now(),
        //     ],
        // ]);
        \App\Models\Shop::factory(8)->create();
    }
}

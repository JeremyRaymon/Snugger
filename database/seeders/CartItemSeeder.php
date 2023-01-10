<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cart_items')->insert([
            'userId' => 3,
            'productId' => 1,
            'qty' => 3,
            'size' => 20
        ]);
        DB::table('cart_items')->insert([
            'userId' => 3,
            'productId' => 3,
            'qty' => 10,
            'size' => 30
        ]);

        DB::table('cart_items')->insert([
            'userId' => 4,
            'productId' => 4,
            'qty' => 10,
            'size' => 50
        ]);
        DB::table('cart_items')->insert([
            'userId' => 4,
            'productId' => 3,
            'qty' => 20,
            'size' => 30
        ]);
        DB::table('cart_items')->insert([
            'userId' => 4,
            'productId' => 2,
            'qty' => 1,
            'size' => 90
        ]);
        DB::table('cart_items')->insert([
            'userId' => 4,
            'productId' => 1,
            'qty' => 9,
            'size' => 10
        ]);
    }
}

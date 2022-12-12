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
            'transactionId' => 1,
            'itemId' => 1,
            'qty' => 3
        ]);
        DB::table('cart_items')->insert([
            'transactionId' => 1,
            'itemId' => 2,
            'qty' => 2
        ]);
        DB::table('cart_items')->insert([
            'transactionId' => 2,
            'itemId' => 1,
            'qty' => 1
        ]);
        DB::table('cart_items')->insert([
            'transactionId' => 3,
            'itemId' => 3,
            'qty' => 2
        ]);
        DB::table('cart_items')->insert([
            'transactionId' => 3,
            'itemId' => 2,
            'qty' => 6
        ]);
        DB::table('cart_items')->insert([
            'transactionId' => 3,
            'itemId' => 1,
            'qty' => 3
        ]);
    }
}

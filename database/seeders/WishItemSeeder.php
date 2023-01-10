<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WishItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('wish_items')->insert([
            'userId' => 3,
            'productId' => 1
        ]);

        DB::table('wish_items')->insert([
            'userId' => 3,
            'productId' => 2
        ]);

        DB::table('wish_items')->insert([
            'userId' => 3,
            'productId' => 3
        ]);

        DB::table('wish_items')->insert([
            'userId' => 3,
            'productId' => 4
        ]);


        DB::table('wish_items')->insert([
            'userId' => 4,
            'productId' => 4
        ]);

        DB::table('wish_items')->insert([
            'userId' => 4,
            'productId' => 2
        ]);
    }
}

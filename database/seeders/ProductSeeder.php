<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Product1',
            'price' => 1000,
            'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'img' => 'shoe.png',
            'category' => 'Basket',
            'qty' => '10'
        ]);
        DB::table('products')->insert([
            'name' => 'Product2',
            'price' => 2000,
            'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'img' => 'shoe.png',
            'category' => 'Football',
            'qty' => '5'
        ]);
        DB::table('products')->insert([
            'name' => 'Product3',
            'price' => 3000,
            'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'img' => 'shoe.png',
            'category' => 'Walking',
            'qty' => '6'
        ]);
        DB::table('products')->insert([
            'name' => 'Product4',
            'price' => 4000,
            'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'img' => 'shoe.png',
            'category' => 'Running',
            'qty' => '1'
        ]);
    }
}

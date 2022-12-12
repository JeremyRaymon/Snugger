<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'userId' => 3,
            'receiver' => 'User 1 Name',
            'address' => 'User 1 Address',
        ]);
        DB::table('transactions')->insert([
            'userId' => 3,
            'receiver' => 'User 1 Family Member',
            'address' => 'User 1 Address',
        ]);
        DB::table('transactions')->insert([
            'userId' => 3,
            'receiver' => 'User 1 Name',
            'address' => 'User 1 Another Address',
        ]);
    }
}

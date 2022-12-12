<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstName' => 'Admin1',
            'lastName' => 'Admin1',
            'email' => 'Admin1@gmail.com',
            'password' => bcrypt('Admin1Pass'),
            'role' => 'admin',
            'address' => 'Admin Address 1',
            'phone' => '123412341234'
        ]);
        DB::table('users')->insert([
            'firstName' => 'Admin2',
            'lastName' => 'Admin2',
            'email' => 'Admin2@gmail.com',
            'password' => bcrypt('Admin2Pass'),
            'role' => 'admin',
            'address' => 'Admin Address 2',
            'phone' => '123412341234'
        ]);
        DB::table('users')->insert([
            'firstName' => 'User1',
            'lastName' => 'User1',
            'email' => 'User1@gmail.com',
            'password' => bcrypt('User1Pass'),
            'role' => 'customer',
            'address' => 'Customer Address 1',
            'phone' => '123412341234'
        ]);
        DB::table('users')->insert([
            'firstName' => 'User2',
            'lastName' => 'User2',
            'email' => 'User2@gmail.com',
            'password' => bcrypt('User2Pass'),
            'role' => 'customer',
            'address' => 'Customer Address 2',
            'phone' => '123412341234'
        ]);
    }
}

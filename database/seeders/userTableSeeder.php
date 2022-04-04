<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::table('users')->insert([
            'user_name' => 'admin',
            'user_email' => 'admin@master.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);
    }
}

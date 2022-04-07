<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                    'username' => 'admin',
                    'password' => Hash::make('admin'),
                    'email' => 'admin@travatrix.tech',
                    'fullname' => 'Administator',
                    'phonenumber' => '0991999999',
                    'address' => 'BTEC FPT, Trinh  Van Bo',
                    'city' => 'Hanoi',
                ]);
    }
}

<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product') -> insert(
            [

                'productid' => 'MDK01',
                'productname' => 'DarKrix',
                'price' => '150',
                'size' => '43',
                'color' => 'Black',
                'images' => 'images/SingleItem/Male/DarKrix/1.jpg',
                'category' => 'Male',
                'description' => 'Bumper Gum EXT (Extension) NE is an upgrade that is classified in the Basas product line',
            ]
            );
    }
}

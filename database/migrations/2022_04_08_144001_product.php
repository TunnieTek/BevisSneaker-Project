<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $product) {
            $product -> increments('productid') ;
            $product -> string('productname');
            $product -> string('price');
            $product -> string('category');
            $product -> string('color');
            $product -> string('size');
            $product -> string('description');
            $product -> string('image');
            $product -> string('image2');
            $product -> string('image3');
            $product -> string('image4');
            $product -> string('image5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

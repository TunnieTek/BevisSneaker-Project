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
            $product -> string('productid');
            $product -> string('productname');
            $product -> float('price');
            $product -> float('size');
            $product -> string('color');
            $product -> string('images');
            $product -> string('category');
            $product -> string('description');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        return view('master');
    }

    public function getProduct()
    {
        return view('product');
    }

    public function getProductDetail()
    {
        return view('detail');
    }

    public function homepage()
    {
        return view('homepage');
    }
}

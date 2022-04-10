<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

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

    public function Login()
    {
        return view('login');
    }

    public function Signup()
    {
        return view('signup');
    }

    public function getCart()
    {
        $carts = Cart::content();
        $total = Cart::priceTotal();

        $data = [
            'carts' => $carts,
            'total' => $total,
        ];

        return view('cart', $data);
    }
}

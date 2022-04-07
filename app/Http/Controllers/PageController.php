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
        return view('cart');
    }

    public function Contact()
    {
        return view('contact');
    }
}

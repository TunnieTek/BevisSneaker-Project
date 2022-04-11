<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Detail;

class OrderController extends Controller
{
    // public function Order(Request $request, $id)
    // {
    //     $cart = new Cart;
    //     $cart->username = $request->username;
    //     $cart->detail = $request->id;
    //     $cart->quantity = $request->quantity;
    //     $cart->save();
    //     return redirect()->route('cart');
    // }
}

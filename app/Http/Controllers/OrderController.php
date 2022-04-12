<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Bill;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class OrderController extends Controller
{
    public function getBill()
    {
        $cart = Cart::where('username', Auth::user()->username)->get('cartid');
        $total = 0;
        foreach ($cart as $key => $value) {
            $total += $value->price * $value->quantity;
        }
        return view('cart', ['cart' => $cart, 'total' => $total]);
        dd($bill);
    }

    public function Bill(Request $request)
    {
        $bill = new Bill;
        $bill=Cart::where('username', Auth::user()->username)->get('cartid');
        $bill->purchasedate = date('Y-m-d');
        $bill->total = $request->total;
        $bill->save();
        $alertor = 'Thank you! <br>Your order has been placed successfully';
        return redirect()->route('purchase')->with('alertor', $alertor)->destroy();
    }


}

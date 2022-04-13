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
use Illuminate\Support\Facades\DB;



class OrderController extends Controller
{
    public function getBill()
    {
        $bill = DB::table('cart')
            ->join('product', 'cart.product', '=', 'product.productid')
            ->join('users', 'cart.username', '=', 'users.username')
            ->join('size', 'cart.size', '=', 'size.sizeid')
            ->select('cart.*','product.*','size.size','users.username')
            ->where('cart.username', Auth()->user()->username)
            ->get();
    }

    public function Bill(Request $request)
    {
        $cart = Cart::where('username', Auth()->user()->username)->get();
        $bill = new Bill;
        $bill->cart = $cart;
        $bill->product = $request->productname;
        $bill->size= $request->size;
        $bill->purchasedate = date('Y-m-d');
        $bill->total = $request->total;
        dd($bill);
        $bill->save();
        $alertor = 'Thank you! <br>Your order has been placed successfully';
        return redirect()->route('purchase')->with('alertor', $alertor)->destroy();
    }


}

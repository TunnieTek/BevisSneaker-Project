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
    // public function getBill()
    // {
    //     $bill = DB::table('cart')
    //         ->join('product', 'cart.product', '=', 'product.productid')
    //         ->join('users', 'cart.username', '=', 'users.username')
    //         ->join('size', 'cart.size', '=', 'size.sizeid')
    //         ->select('cart.*','product.*','size.size','users.username')
    //         ->where('cart.username', Auth()->user()->username)
    //         ->get();
    //         dd($bill);
    //     return view('purchase', ['bill' => $bill]);
    // }

    public function Bill(Request $request)
    {

        // $cart = Cart::where('username', Auth()->user()->username)->get();
        $bill = new Bill;
        $cart =  DB::table('cart')
            ->where('username', Auth()->user()->username)->first();
        $bill->cart = $cart->cartid;
        $bill->product = $cart->product;
        $bill->size=$cart->size;
        $bill->quantity =$cart->quantity;
        $bill->purchasedate = date('Y-m-d');
        $bill->total = $request->total;
        $bill->save();
        $alertor = 'Thank you! Your order has been placed successfully';
        return redirect()->route('purchase')->with('alertor', $alertor)->with('cart', $cart);
    }

    public function showBill()
    {
        $bill = DB::table('bill')
            ->join('cart', 'bill.cart', '=', 'cart.cartid')
            ->join('product', 'cart.product', '=', 'product.productid')
            ->join('users', 'cart.username', '=', 'users.username')
            ->join('size', 'cart.size', '=', 'size.sizeid')
            ->select('bill.*','cart.*','product.*','size.size','users.*')
            ->where('cart.username', Auth()->user()->username)
            ->get();
        return view('purchase', ['bill' => $bill]);
    }

    public function showAdminBill()
    {
        $bill = DB::table('bill')
            ->join('cart', 'bill.cart', '=', 'cart.cartid')
            ->join('product', 'cart.product', '=', 'product.productid')
            ->join('users', 'cart.username', '=', 'users.username')
            ->join('size', 'cart.size', '=', 'size.sizeid')
            ->select('bill.*','cart.*','product.*','size.size','users.*')
            ->get('bill.*');
        return view('admin.manage-order', ['bill' => $bill]);
    }

    public function DeleteCartBill($cartid)
    {
        $data = Cart::find($cartid);
        $data->delete();
        return view('master');
    }

}

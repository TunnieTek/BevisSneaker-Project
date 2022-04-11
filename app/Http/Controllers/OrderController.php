<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Detail;

class OrderController extends Controller
{


    public function Bill(Request $request)
    {
        $data = new bill;
        $data->username = Auth()->user()->username;
        $data->cart = $request->cartid;
        $data->purchasedate = gettimeofday();
        $data->total = $request->total;
        $data->save();
        $alertor = 'Thank you!
                    <br>Your order has been placed successfully';
        return back()->with('alertor', $alertor);
    }

}

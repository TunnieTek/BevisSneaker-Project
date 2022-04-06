<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;




class ProductController extends Controller
{
    public function getAllProduct()
    {
        return Product::All();
        return view('product', compact("product"));
    }
}

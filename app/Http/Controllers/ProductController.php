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
        $product = Product::All();
        return view('product', compact("product"));
    }

    public function getAllAdminProduct()
    {
        $product = Product::All();
        return view('admin.admin-product', compact("product"));
    }

    public function addProduct(Request $request)
    {
        $product = new product;
        $product->productid = $request->productid;
        $product->productname = $request->productname;
        $product->price = $request->price;
        $product->color = $request->color;
        $product->size = $request->size;
        $product->images = $request->images;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('admin-product');
    }
}

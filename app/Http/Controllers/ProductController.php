<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Size;
use App\Models\Color;
use App\Models\Cart;
use App\Models\User;
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
        return view('product', ['product' => $product]);
    }


    public function getAllAdminProduct()
    {



        // $product = DB::table('category','color')
        //     ->join('product', 'product.category', '=', 'category.categoryid')
        //     ->select('product.*','category.category')
        //     ->get();

        $product = DB::table('product')
            ->join('category', 'product.category', '=', 'category.categoryid')
            ->join('color', 'product.color', '=', 'color.colorid')
            ->select('product.*','category.category','color.color')
            ->get();

        // $product = DB::table('product')->get();
        return view('admin.admin-product', ['product' => $product]);
    }

    public function addProduct(Request $request)
    {
        $product = new product;
        // $product->productid = $value ?? '';
        $product->productname = $request->productname;
        $product->price = $request->price;
        $product->color = $request->color;
        $product->image = $request->image;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->image2 = $request->images2;
        $product->image3 = $request->images3;
        $product->image4 = $request->images4;
        $product->image5 = $request->images5;
        $product->save();
        return redirect()->route('database');
    }

    public function DeleteProduct($productid)
    {
        $product = Product::find($productid);
        $product->delete();
        return back();
    }

    public function Detail($productid)
    {
        $data = Product::find($productid);
        $size = Size::all();
        $color = DB::table('color')
            ->join('product', 'product.color', '=', 'color.colorid')
            ->select('color.*')
            ->where('product.productid', $productid)
            ->get();

        $category = DB::table('category')
            ->join('product', 'product.category', '=', 'category.categoryid')
            ->select('category.*')
            ->where('product.productid', $productid)
            ->get();


        return view('detail', compact('data', 'size', 'color','category'));
        // return view('detail',compact('size','color'), ['data' => $data]);

    }

    public function updateProduct(Request $request, $productid)
    {
        $product = Product::find($productid);
        $product->productid = $request->productid;
        $product->productname = $request->productname;
        $product->price = $request->price;
        $product->color = $request->color;
        $product->images = $request->images;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->images2 = $request->images2;
        $product->images3 = $request->images3;
        $product->images4 = $request->images4;
        $product->images5 = $request->images5;
        $product->save();
        return back();
    }

    public function getUpdateProduct($productid)
    {
        $data['product'] = Product::find($productid);
        return view('admin.admin-updateProduct',$data);
    }



    public function getCart(Request $request)
    {
        $data = new Cart;
        $data->username = Auth()->user()->username;
        $data->product = $request->productid;
        $data->quantity = $value ?? '1';
        $data->size = $request->size;
        $data->save();
        $alertadd = 'Add to cart successfully!';
        return back()->with('alertadd', $alertadd);
    }

    public function getAllCart()
    {
        // $product = DB::table('product')
        //     ->join('category', 'product.category', '=', 'category.categoryid')
        //     ->join('color', 'product.color', '=', 'color.colorid')
        //     ->select('product.*','category.category','color.color')
        //     ->get();

        $cart = DB::table('cart')
            ->join('product', 'cart.product', '=', 'product.productid')
            ->join('users', 'cart.username', '=', 'users.username')
            ->join('size', 'cart.size', '=', 'size.sizeid')
            ->select('cart.*','product.*','size.size','users.username')
            ->where('cart.username', Auth()->user()->username)
            ->get();

        if (Auth()->user()->role == '2') {
            $voucher = 100;
            alert('Voucher: ' . $voucher . '%');
        } else {
            $voucher = 0;
        }


        $total = 0;
        foreach ($cart as $key => $value) {
            $total += $value->price * $value->quantity - $voucher;
        }
        return view('cart', ['cart' => $cart, 'total' => $total]);
    }

    public function DeleteCart($cartid)
    {
        $data = Cart::find($cartid);
        $data->delete();
        return back();
    }
    // =======================================================================



}

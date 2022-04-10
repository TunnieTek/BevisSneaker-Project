<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\listUserController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('master');
});

// Route::get('index',[
//     'as'=>'homepage',
//     'user'=>'PageController@getIndex'
// ]);

Route::get('index',[PageController::class, 'getIndex']) -> name('index');
Route::get('product',[PageController::class, 'getProduct'])  -> name('product');
// Route::get('detail',[PageController::class, 'getProductDetail'])  -> name('detail');
Route::get('cart',[PageController::class, 'getCart']) -> name('cart');

// Route::get('login',[loginController::class, 'Login']);

Route::get('homepage',[PageController::class, 'homepage']) -> name('homepage');

// list all user
// Route::get('user', [UserController::class, 'getAllUser'])->name('user');
Route::get('user', 'UserController@getAllUser') ->name('user');


// Delete User
Route::get('admin-blank/{username}',[UserController::class, 'getDeleteUser']) ->name('deleteUser');


// LOGIN/SIGNUP
Route::get('login', 'loginController@getLogin') -> name('login');;
Route::post('login', 'loginController@postLogin');



Route::get('signup','loginController@getSignup') -> name('signup');
Route::post('signup','loginController@postSignup');

// Admin
Route::get('admin',[AdminController::class, 'getAdmin']);
Route::get('database',[AdminController::class, 'getTable']);


// Route::get('user',[AdminController::class, 'getBlank']) -> name('blank');
Route::get('admin-product',[AdminController::class, 'getProduct']) -> name('admin-product');




// // Anypage error
// Route::get('{any}', 'Error@ErrorPage')
//     ->where('any', '.*');

// Logout
Route::get('logout', function(){
    Request::session()->flush();
    return view('login');
});




// PRODUCT ================================================================================
// Route::get('/product', 'ProductController@getAllProduct') ->name('product');
// Route::get('product',[ProductController::class, 'getAllProduct']);

Route::get('product', 'ProductController@getAllProduct') ->name('product');
Route::get('admin-product', 'ProductController@getAllAdminProduct') ->name('admin-product');

Route::post('admin-product','ProductController@addProduct') ->name('admin-product');

// Route::get('detail/{productid}','ProductController@Detail')  -> name('detail');
Route::get('detail/{productid}',[ProductController::class, 'Detail']);
Route::get('admin-product/{productid}',[ProductController::class, 'DeleteProduct']) ->name('delete');

Route::get('add-to-cart/{productid}',[ProductController::class, 'addToCart'])->name('add-to-cart');
Route::get('del-product-cart/{id}',[ProductController::class, 'delProductCart'])->name('del-product-cart');
Route::get('update-product-cart/{rowid}',[ProductController::class, 'updateProductCart'])->name('update-product-cart');

Route::post('order', [ProductController::class, 'order'])->name('order');


//Update User
Route::get('admin-blank','UserController@getAllUser') -> name('admin-blank');
Route::post('admin-blank','UserController@updateUser') ->name('UpdateUser');


Route::get('UpdateUser/{username}','UserController@getUpdateUser') -> name('UU');
Route::post('UpdateUser/{username}','UserController@updateUser');

// Order
Route::get('admin-order',[OrderController::class, 'index'])->name('admin.order.index');
Route::post('admin-order/approve/{id}',[OrderController::class, 'approve'])->name('admin.order.approve');
Route::post('admin-order/delete/{id}',[OrderController::class, 'delete'])->name('admin.order.delete');
Route::get('admin-order-detail/{id}',[OrderController::class, 'detail'])->name('admin.order.detail');

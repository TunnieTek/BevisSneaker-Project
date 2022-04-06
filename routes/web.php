<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\listUserController;

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
Route::get('detail',[PageController::class, 'getProductDetail'])  -> name('detail');
Route::get('cart',[PageController::class, 'getCart']) -> name('cart');

// Route::get('login',[loginController::class, 'Login']);

Route::get('homepage',[PageController::class, 'homepage']) -> name('homepage');

// list all user
// Route::get('user', [UserController::class, 'getAllUser'])->name('user');
Route::get('user', 'UserController@getAllUser') ->name('blank');


// Delete User
// Route::get('user', 'UserController@getDeleteUser') ->name('blank');


// LOGIN/SIGNUP
Route::get('login', 'loginController@getLogin') -> name('login');;
Route::post('login', 'loginController@postLogin');
// Session Login
// Route::post('login', function () {
//     $username = Request::input('username');
//     $password = Request::input('password');
//     if($username == ['username'] && $password == ['password'])
//     {
//         $request::session()->put('login', true);
//         $request::session()->put('username','username');
//         return view('homepage')->with('success', 'Logged Successfully');
//     };
// });


Route::get('signup','loginController@getSignup') -> name('signup');
Route::post('signup','loginController@postSignup');

// Admin
Route::get('admin',[AdminController::class, 'getAdmin']);
Route::get('database',[AdminController::class, 'getTable']);


// Route::get('user',[AdminController::class, 'getBlank']) -> name('blank');
// Route::get('adminproduct',[AdminController::class, 'getProduct']) -> name('adminproduct');



// Anypage error
Route::get('{any}', 'Error@ErrorPage')
    ->where('any', '.*');

// Logout
Route::get('logout', function(){
    Request::session()->flush();
    return view('login');
});




// PRODUCT ================================================================================
// Route::get('/product', 'ProductController@getAllProduct') ->name('product');
Route::get('/product',[ProductController::class, 'getAllProduct']);

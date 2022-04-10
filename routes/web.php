<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
// Route::get('detail',[PageController::class, 'getProductDetail'])  -> name('detail');
Route::get('cart',[PageController::class, 'getCart']) -> name('cart');

// Route::get('login',[loginController::class, 'Login']);

// Route::get('contact',[PageController::class, 'contact']) -> name('contact');

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

Route::post('database','ProductController@addProduct') ->name('database');

// Route::get('detail/{productid}','ProductController@Detail')  -> name('detail');
Route::get('detail/{productid}',[ProductController::class, 'Detail']);
Route::get('admin-product/{productid}',[ProductController::class, 'DeleteProduct']) ->name('delete');



//Update User
Route::get('admin-blank','UserController@getAllUser') -> name('admin-blank');
Route::post('admin-blank','UserController@updateUser') ->name('UpdateUser');


Route::get('UpdateUser/{username}','UserController@getUpdateUser') -> name('UU');
Route::post('UpdateUser/{username}','UserController@updateUser');


// Update Product
Route::get('admin-product','ProductController@getAllAdminProduct') -> name('admin-product');
Route::post('admin-product','ProductController@updateProduct') ->name('UpdateProduct');


Route::get('UpdateProduct/{productid}','ProductController@getUpdateProduct') -> name('UP');
Route::post('UpdateProduct/{productid}','ProductController@updateProduct');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;

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
    return view('404');
});

// Route::get('index',[
//     'as'=>'homepage',
//     'user'=>'PageController@getIndex'
// ]);

Route::get('index',[PageController::class, 'getIndex']);
Route::get('product',[PageController::class, 'getProduct']);
Route::get('detail',[PageController::class, 'getProductDetail']);
Route::get('login',[PageController::class, 'Login']);
Route::get('signup',[PageController::class, 'Signup']);

Route::get('admin',[AdminController::class, 'getAdmin']);
Route::get('database',[AdminController::class, 'getTable']);

Route::get('{any}', 'Error@ErrorPage')
    ->where('any', '.*');



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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



<?php

use Illuminate\Support\Facades\Route;
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
    return view('404');
});

// Route::get('index',[
//     'as'=>'homepage',
//     'user'=>'PageController@getIndex'
// ]);

Route::get('index',[PageController::class, 'getIndex']);
Route::get('product',[PageController::class, 'getProduct']);
Route::get('detail',[PageController::class, 'getProductDetail']);
//Route::get('login',[PageController::class, 'Login']);

Route::get('homepage',[PageController::class, 'homepage']) -> name('homepage');

// list all user to view:listuserVan --- Van
Route::get('listUser', 'getAllUserController@getAllUser') -> name('listUser');
Route::group(['prefix' => 'user'], function() 
{
    Route::get('login', 'loginController@getLogin') -> name('login');; 
    Route::post('login', 'loginController@postLogin');
    Route::get('signup','loginController@getSignup') -> name('signup');
    Route::post('signup','loginController@postSignup');

    Route::get('edituser/{user_id}', 'updateUserController@getEditUser') -> name('editUser');
    Route::post('edituser/{user_id}', 'updateUserController@postEditUser');
    Route::get('deleteuser/{user_id}', 'updateUserController@getDeleteUser') -> name('deleteUser');
});

Route::get('admin',[AdminController::class, 'getAdmin']);
Route::get('database',[AdminController::class, 'getTable']);

Route::get('{any}', 'Error@ErrorPage')
    ->where('any', '.*');



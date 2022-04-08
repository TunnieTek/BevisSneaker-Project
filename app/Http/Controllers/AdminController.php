<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getAdmin()
    {
        return view('admin.admin-master');
    }

    public function getTable()
    {
        return view('admin.admin-table');
    }

    public function getBlank()
    {
        return view('admin.admin-blank');
    }

    public function getProduct()
    {
        return view('admin.admin-product');
    }

    public function postLoginAdmin(Request $request)
    {
        $data = request()->all();
        if (Auth::attempt(['username' => $data['username'], 'password' => $data['password']])) {
                // $user = Auth::User();
                // Session::put('user', $user);
                // $user=Session::get('user');
                // return $user->name;
            $alertsc='Logged Successfully!';
            return redirect()->route('admin')->with('alertsc',$alertsc);
        } else {
            $alerter='Username or Password Incorrect';
            return redirect()->back()->with('alerter',$alerter);
        }


    }

    

}

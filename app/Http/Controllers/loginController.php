<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin()
    {
        $data = request()->all();
        if (Auth::attempt(['user_name' => $data['user_name'], 'password' => $data['password']])) {
            return redirect()->route('index');
        } else {
            return redirect()->back();
        }
    }

    public function getSignup()
    {
        return view('signup');
    }

    public function postSignup(Request $request)
    {
        $user = new User;
        $user->user_name = $request->user_name;
        $user->password = Hash::make($request->password);
        $user->user_email = $request->user_email;
        $user->role = $request->role;
        $user->save();
        return redirect()->route('login');
    }
}

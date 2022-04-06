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

    public function postLogin(Request $request)
    {
        $data = request()->all();
        if (Auth::attempt(['username' => $data['username'], 'password' => $data['password']])) {
                // $user = Auth::User();
                // Session::put('user', $user);
                // $user=Session::get('user');
                // return $user->name;
            $alertsc='Logged Successfully!';
            return redirect()->route('index')->with('alertsc',$alertsc);
        } else {
            $alerter='Username or Password Incorrect';
            return redirect()->back()->with('alerter',$alerter);
        }


    }

    public function getSignup()
    {
        return view('signup');
    }

    public function postSignup(Request $request)
    {
        $user = new User;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->fullname = $request->fullname;
        $user->phonenumber = $request->phonenumber;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->save();
        return redirect()->route('login');
    }
}

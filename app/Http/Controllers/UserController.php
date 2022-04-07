<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function getAllUser()
    {
        $user=user::paginate(10);
        return view('admin.admin-blank', compact("user"));
    }

    public function getDeleteUser($username)
    {
        $user = User::find($username);
        $user->delete();
        return back();
    }

    public function updateUser(Request $request, $username)
    {
        $user = User::find($username);
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->fullname = $request->fullname;
        $user->phonenumber = $request->phonenumber;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->save();
        return back();
    }

    public function getUpdateUser($username)
    {
        $data['user'] = User::find($username);
        return view('admin.admin-updateUser',$data);
    }

}

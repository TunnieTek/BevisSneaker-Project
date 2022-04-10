<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\listUserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class updateUserController extends Controller
{
    public function getEditUser($user_id)
    {
        $user = User::find($user_id);
        return view('editUser', ['user' => $user]);
    }

    public function postEditUser(Request $request, $user_id)
    {
        $user = User::find($user_id);
        $user->user_name = $request->user_name;
        $user->user_email = $request->user_email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect()->route('listUser');
    }

    public function getDeleteUser($username)
    {
        $user = User::find($username);
        $user->delete();
        return redirect()->route('blank');
    }
}

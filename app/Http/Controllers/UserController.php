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

    // public function getDeleteUser($username)
    // {
    //     $user = User::find($username);
    //     $user->delete();
    //     return redirect()->route('blank');
    // }

}

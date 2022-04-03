<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\listUserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class getAllUserController extends Controller
{
    public function getAllUser()
    {
        $user = User::all();
        return view('listUserVan',['user'=>$user]);
    }
}

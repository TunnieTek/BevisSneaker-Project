<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Error extends Controller
{
    public function ErrorPage()
    {
        return view('404');
    }
}

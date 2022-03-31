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
}

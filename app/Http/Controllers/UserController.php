<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin/users');
        return view('admin/clienti');
        return view('admin/orders');
    }
}

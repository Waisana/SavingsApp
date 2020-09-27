<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }
    // admin side
    public function dashboard()
    {
        return view('admins.dashboard');
    }
}

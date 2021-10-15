<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function adminLogin()
    {
        return view('auth.adminLogin');
    }


    public function adminDashboard()
    {
        return view('admin.dashboard');
    }
}
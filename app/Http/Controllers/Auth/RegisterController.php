<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function login()
    {
        return view('auth.register');
    }


    public function registerUser(Request $request)
    {
        dd($request);
    }
}
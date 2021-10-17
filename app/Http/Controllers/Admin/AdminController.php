<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users= User::all();
        return view('admin.dashboard',[
            'users'=>$users,
        ]);
    }

    public function delete(Request $request){
        $delete = User::find($request->id);
        $delete->delete();
        return redirect()->route('admin.dashboard');
    }
}

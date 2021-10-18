<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AutoPart;
use App\Models\CarModel;
use App\Models\Make;
use App\Models\Year;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard')
            ->with('makes', Make::all())
            ->with('carModels', CarModel::all())
            ->with('years', Year::all());
    }


    public function make(Request $request)
    {
        return response()->json([
           'request' => dd($request) 
        ]);
    }
    
    public function fetchAutoData()
    {
        $data = [];

        $data = [AutoPart::orderBy('id', 'asc')->get()];


       if($data != null){
            return response()->json([
                'status' => 200,
                'data' => $data
            ]);
       }

        
    }
}
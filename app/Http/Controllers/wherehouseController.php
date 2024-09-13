<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\wherehouse;


class wherehouseController extends Controller
{
    public function index()
    {
        $tittle = 'Wherehouse';
        
        $data = wherehouse::all();

        return view('wherehouse.index',compact('tittle','data'));
    }
}

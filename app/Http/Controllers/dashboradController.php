<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;


class dashboradController extends Controller
{
    public function index(){
        $tittle = 'Dasboard';
        
        $data = product::with('imageProduct')->get(); 

        return view('dashboard',compact('tittle','data'));
    }
    
    
}

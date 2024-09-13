<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;

class checkoutController extends Controller
{
    public function detail($id){

        $data = product::findOrFail($id);

        return view('checkout.detail',compact('data'));

    }
}

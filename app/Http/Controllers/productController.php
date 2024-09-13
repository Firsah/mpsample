<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 


use App\Models\product;
use App\Models\category;
use App\Models\imageProduct;



class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tittle = 'product';
        
        //Mengambil produk dengan gambar  terkait
        $data = product::with('imageProduct')->get();

        return view('product.index',compact('tittle','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tittle = 'Tambah Product Baru';

        $dataCategory = category::all();
        
        return view('product.create',compact('tittle','dataCategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:225',
            'price' => 'required|numeric',
            'stok' => 'required|numeric',
            'weight' => 'required|numeric',
            'category_id' => 'required|exists:category,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|max:225'
        ]);

        $product = new product();
        $product->category_id =  $request->category_id;
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->stok = $request->stok;
        $product->weight = $request->weight;
        $product->description = $request->description;
        $product->save();
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/images',$imageName);

            //menyimpan gambar pada tabel 'image_product'
            $imageProduct = new imageProduct();
            $imageProduct->product_id = $product->id; //Mengasosiasikan dengan product baru yang di simpan
            $imageProduct->image = $imageName;
            $imageProduct->save();

            return redirect()->route('productController-index')->with('success','Product Berhasil Ditambahkan');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

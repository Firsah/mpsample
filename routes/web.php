<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\dashboradController;
use App\Http\Controllers\productController;
use App\Http\Controllers\wherehouseController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[dashboradController::class,'index'])->name('dashboardController-index');
Route::get('/category',[categoryController::class,'index'])->name('categoryController-index');
Route::get('/wherehouse',[wherehouseController::class,'index'])->name('wherehouseController-index');

Route::prefix('checkout')->group(function(){
    Route::get('/detail/{id}',[checkoutController::class,'detail'])->name('checkout-detail');
});

Route::prefix('produk')->group(function(){
    Route::get('/',[productController::class,'index'])->name('productController-index');
    Route::get('/create',[productController::class,'create'])->name('productController-create');
    Route::post('/store',[productController::class,'store'])->name('productController-store');
});


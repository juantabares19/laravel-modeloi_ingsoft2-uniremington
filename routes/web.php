<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('home');
});

Route::get('/products/pdf', [ProductController::class, 'generarPDF'])->name('products.pdf');

Route::get('/products/pdf/{id}',[ProductController::class,'pdf'])->name('pdf');

Route::resource('/products', ProductController::class);





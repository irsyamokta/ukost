<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('client.index');
});

// Route::get('/product', function () {
//     return view('layouts.product.product');
// });

Route::get('/product', [ProductController::class, 'detail'])->name('product.detail');

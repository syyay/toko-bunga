<?php

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
});

Route::resource('products', ProductController::class);


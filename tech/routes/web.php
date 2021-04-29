<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::resource('/', ProductController::class);
Route::resource('products', ProductController::class);

// Route::get('/', function () {
//     return view('welcome');


// });

<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WorkshopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.index');
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/workshops', [WorkshopController::class, 'index']);

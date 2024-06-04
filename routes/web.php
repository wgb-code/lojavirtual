<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/new', [ProductsController::class, 'create']);
Route::post('/products/new', [ProductsController::class, 'store']);
Route::get('/products/update/{id}', [ProductsController::class, 'edit']);
Route::post('/products/update/', [ProductsController::class, 'update']);
Route::get('/products/delete/{id}', [ProductsController::class, 'destroy']);
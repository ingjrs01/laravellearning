<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/products',[ProductosController::class,'index']);
Route::get('/products/{id}',[ProductosController::class,'get']);

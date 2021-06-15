<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\Employees;
use App\Http\Controllers\CustomersController;


Route::get('/', function () {
    return view('welcome');
});

Route::put('/products/product',[ProductosController::class,'save']);
Route::get('/products',[ProductosController::class,'index']);
Route::get('/products/{id}',[ProductosController::class,'get']);
//Route::resource('products','ProductosController');
Route::resource('employees',Employees::class);
Route::resource('customers',CustomersController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


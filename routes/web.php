<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class,'Login'])->name('Login');
Route::Post('auth', [UserController::class,'Auth'])->name('Auth');
Route::post('logout',[UserController::class,'logout'])->name('logout'); // logout 

Route::get('index', [ProductController::class, 'index'])->name('products.index');
Route::get('products/Registration', [UserController::class, 'RegisterFormShow'])->name('Registration');
Route::post('DataStore', [UserController::class, 'RegisterDataStore'])->name('RegisterDataStore');
Route::get('Home', [ProductController::class, 'Homepage'])->name('products.Home');
Route::get('hospital', [ProductController::class, 'hospital'])->name('hospital'); 

Route::get('products/create', [ProductController::class, 'create'])->name('create');

Route::post('products/store', [ProductController::class, 'store'])->name('store');
Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('edit');
Route::put('products/{id}/update', [ProductController::class, 'update'])->name('update');
Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


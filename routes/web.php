<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', MainController::class)->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => 'auth'], function () {
//     Route::resource('products', ProductController::class);
// });

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/{product}', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/{product}', [CartController::class, 'removeFromCart'])->name('cart.remove');

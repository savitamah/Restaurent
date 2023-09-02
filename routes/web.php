<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/menu', [App\Http\Controllers\HomeController::class, 'menu'])->name('menu');
Route::get('/cart/{menu}/{user}', [App\Http\Controllers\CartController::class, 'addCart'])->name('cart.add');
//Route::get('/restaurent-backend', [App\Http\Controllers\HomeController::class, 'index1'])->name('restaurent-backend');


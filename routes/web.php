<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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


Route::get('/',[BookController::class,"index"])->name('product.index');
Route::get('/create',[BookController::class,"create"])->name('product.create');
Route::post('product/store',[BookController::class,"store"])->name('product.store');
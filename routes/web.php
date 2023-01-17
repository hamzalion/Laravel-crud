<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| routes are loaded by the Rout| Here is where you can register web routes for your application. These
eServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [OrderController::class, 'index']);

Route::resource('products', ProductController::class);
Route::resource('order', OrderController::class);


<?php

use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ViewCartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/login-user',[LoginController::class,'login']);
Route::get('/logout', [LoginController::class,'logout']);
Route::get('/dashboard',[DashboardController::class,'dashboard']);
Route::post('/add-to-cart',[AddToCartController::class,'addTocart']);
Route::get('/view-cart', [ViewCartController::class,'viewCart']);

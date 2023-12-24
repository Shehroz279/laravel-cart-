<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\ProductController;
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
Route::get('/',[pagesController::class,'index']);
Route::get('/shop',[ProductController::class,'index']);
Route::get('/shop/{id}',[ProductController::class,'show']);
Route::get('/cart',[CartController::class,'index']);
Route::get('/addToCart/{id}',[CartController::class,'add']);
Route::get('/deleteCart/{id}',[CartController::class,'delete']);
Route::post('/updateCart/{id}',[CartController::class,'update']);
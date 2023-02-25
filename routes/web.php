<?php

use App\Http\Controllers\CustomerController;
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

Route::get('/',[CustomerController::class,'index']);
Route::get('/customer/{customerId}',[CustomerController::class,'show']);
Route::get('/customer/{customerId}/update',[CustomerController::class,'update']);
Route::get('/customer/{customerId}/delete',[CustomerController::class,'destroy']);




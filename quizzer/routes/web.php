<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class,'index']);
Route::get('/question/{id}', [\App\Http\Controllers\QuizzController::class,'index']);
Route::post('/check-answer', [\App\Http\Controllers\QuizzController::class,"check"]);

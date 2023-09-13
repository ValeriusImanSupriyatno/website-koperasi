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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [\App\Http\Controllers\Website\HomeController::class, 'index']);
Route::get('/beranda', [\App\Http\Controllers\Website\HomeController::class, 'index']);
Route::get('/tentang-kami', [\App\Http\Controllers\Website\AboutController::class, 'index']);
Route::get('/berita', [\App\Http\Controllers\Website\BlogController::class, 'index']);
Route::get('/berita/{id}', [\App\Http\Controllers\Website\BlogController::class, 'show']);

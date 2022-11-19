<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;

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

//Auth::routes();
Route::get('/', [FilmeController::class,'index']);
Route::get('/create/', [FilmeController::class,'create']);
Route::get('/create/insert/', [FilmeController::class,'store']);
Route::get('/edit/', [FilmeController::class,'edit']);
Route::get('/delete/', [FilmeController::class,'destroy']);
Route::get('/update/', [FilmeController::class,'update']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

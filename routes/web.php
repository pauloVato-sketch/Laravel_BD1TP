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

Route::get('/', [FilmeController::class,'index'])->name('filme.index');
Route::get('/create/', [FilmeController::class,'create'])->name('filme.create');
Route::get('/create/insert/', [FilmeController::class,'store'])->name('filme.store');

Route::get('/delete/', [FilmeController::class,'delTemp'])->name('filme.delete');

Route::post('/delete/', [FilmeController::class,'destroy'])->name('filme.deleteReq');

Route::get('/update/{filme:ID}', [FilmeController::class,'edit'])->name('filme.edit');
Route::post('/update/', [FilmeController::class,'update'])->name('filme.update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

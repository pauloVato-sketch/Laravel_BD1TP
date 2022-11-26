<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AtorController;
use App\Http\Controllers\EstudioController;


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
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/homeFilme/', [FilmeController::class,'index'])->name('filme.index');
Route::get('/createFilme/', [FilmeController::class,'create'])->name('filme.create');
Route::post('/createFilme/insert/', [FilmeController::class,'store'])->name('filme.store');
Route::get('/deleteFilme/', [FilmeController::class,'delTemp'])->name('filme.delete');
Route::post('/deleteFilme/', [FilmeController::class,'destroy'])->name('filme.deleteReq');
Route::get('/updateFilme/{filme:ID}', [FilmeController::class,'edit'])->name('filme.edit');
Route::post('/updateFilme/', [FilmeController::class,'update'])->name('filme.update');

Route::get('/homeAtor/', [AtorController::class,'index'])->name('ator.index');
Route::get('/createAtor/', [AtorController::class,'create'])->name('ator.create');
Route::post('/createAtor/insert/', [AtorController::class,'store'])->name('ator.store');
Route::get('/deleteAtor/', [AtorController::class,'delTemp'])->name('ator.delete');
Route::post('/deleteAtor/', [AtorController::class,'destroy'])->name('ator.deleteReq');
Route::get('/updateAtor/{ator:ID}/', [AtorController::class,'edit'])->name('ator.edit');
Route::post('/updateAtor/', [AtorController::class,'update'])->name('ator.update');


Route::get('/homeAvaliacao/', [AvaliacaoController::class,'index'])->name('avaliacao.index');

Route::get('/homeElenco/', [ElencoController::class,'index'])->name('elenco.index');

Route::get('/homeEstudio/', [EstudioController::class,'index'])->name('estudio.index');
Route::get('/createEstudio/', [EstudioController::class,'create'])->name('estudio.create');
Route::post('/createEstudio/insert/', [EstudioController::class,'store'])->name('estudio.store');
Route::get('/deleteEstudio/', [EstudioController::class,'delTemp'])->name('estudio.delete');
Route::post('/deleteEstudio/', [EstudioController::class,'destroy'])->name('estudio.deleteReq');
Route::get('/updateEstudio/{estudio:ID}/', [EstudioController::class,'edit'])->name('estudio.edit');
Route::post('/updateEstudio/', [EstudioController::class,'update'])->name('estudio.update');

Route::get('/homeGenero/', [GeneroController::class,'index'])->name('genero.index');

Route::get('/homeUser/', [UserController::class,'index'])->name('user.index');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtorController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\ElencoController;
use App\Http\Controllers\EstudioController;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioController;

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
Route::get('/', [UserController::class, 'index'])->name('welcome');
Route::get('/login/', [UserController::class, 'loginScr'])->name('login');
Route::post('/login/', [UserController::class, 'login'])->name('login');
Route::get('/signup/', [UserController::class, 'signupScr'])->name('signup');
Route::post('/signup/', [UserController::class, 'signup'])->name('signup');

Route::get('/home/', [HomeController::class, 'index'])->name('home');

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
Route::get('/createAvaliacao/', [AvaliacaoController::class,'create'])->name('avaliacao.create');
Route::post('/createAvaliacao/insert/', [AvaliacaoController::class,'store'])->name('avaliacao.store');
Route::get('/deleteAvaliacao/', [AvaliacaoController::class,'delTemp'])->name('avaliacao.delete');
Route::post('/deleteAvaliacao/', [AvaliacaoController::class,'destroy'])->name('avaliacao.deleteReq');
Route::get('/updateAvaliacao/{Filme_ID}/{Usuario_ID}/', [AvaliacaoController::class,'edit'])->name('avaliacao.edit');
Route::post('/updateAvaliacao/', [AvaliacaoController::class,'update'])->name('avaliacao.update');

Route::get('/homeElenco/', [ElencoController::class,'index'])->name('elenco.index');
Route::get('/createElenco/', [ElencoController::class,'create'])->name('elenco.create');
Route::post('/createElenco/insert/', [ElencoController::class,'store'])->name('elenco.store');
Route::get('/deleteElenco/', [ElencoController::class,'delTemp'])->name('elenco.delete');
Route::post('/deleteElenco/', [ElencoController::class,'destroy'])->name('elenco.deleteReq');
Route::get('/updateElenco/{Filme_ID}/{Ator_ID}/', [ElencoController::class,'edit'])->name('elenco.edit');
Route::post('/updateElenco/', [ElencoController::class,'update'])->name('elenco.update');

Route::get('/homeEstudio/', [EstudioController::class,'index'])->name('estudio.index');
Route::get('/createEstudio/', [EstudioController::class,'create'])->name('estudio.create');
Route::post('/createEstudio/insert/', [EstudioController::class,'store'])->name('estudio.store');
Route::get('/deleteEstudio/', [EstudioController::class,'delTemp'])->name('estudio.delete');
Route::post('/deleteEstudio/', [EstudioController::class,'destroy'])->name('estudio.deleteReq');
Route::get('/updateEstudio/{estudio:ID}/', [EstudioController::class,'edit'])->name('estudio.edit');
Route::post('/updateEstudio/', [EstudioController::class,'update'])->name('estudio.update');

Route::get('/homeGenero/', [GeneroController::class,'index'])->name('genero.index');
Route::get('/createGenero/', [GeneroController::class,'create'])->name('genero.create');
Route::post('/createGenero/insert/', [GeneroController::class,'store'])->name('genero.store');
Route::get('/deleteGenero/', [GeneroController::class,'delTemp'])->name('genero.delete');
Route::post('/deleteGenero/', [GeneroController::class,'destroy'])->name('genero.deleteReq');
Route::get('/updateGenero/{genero:ID}/', [GeneroController::class,'edit'])->name('genero.edit');
Route::post('/updateGenero/', [GeneroController::class,'update'])->name('genero.update');

Route::get('/homeUsuario/', [UsuarioController::class,'index'])->name('usuario.index');
Route::get('/createUsuario/', [UsuarioController::class,'create'])->name('usuario.create');
Route::post('/createUsuario/insert/', [UsuarioController::class,'store'])->name('usuario.store');

Route::get('/deleteUsuario/', [UsuarioController::class,'delTemp'])->name('usuario.delete');
Route::post('/deleteUsuario/', [UsuarioController::class,'destroy'])->name('usuario.deleteReq');

Route::get('/updateUsuario/{usuario:ID}/', [UsuarioController::class,'edit'])->name('usuario.edit');
Route::post('/updateUsuario/', [UsuarioController::class,'update'])->name('usuario.update');





Route::get('/homeRelatorio/', [RelatorioController::class,'index'])->name('relatorio.index');
Route::get('/showRelatorio/{op}/', [RelatorioController::class,'show'])->name('relatorio.show');
Route::get('/createRelatorio/', [RelatorioController::class,'create'])->name('relatorio.create');
Route::post('/createRelatorio/insert/', [RelatorioController::class,'store'])->name('relatorio.store');
    
Route::get('/deleteRelatorio/', [RelatorioController::class,'delTemp'])->name('relatorio.delete');
Route::post('/deleteRelatorio/', [RelatorioController::class,'destroy'])->name('relatorio.deleteReq');

Route::get('/updateRelatorio/{usuario:ID}/', [RelatorioController::class,'edit'])->name('relatorio.edit');
Route::post('/updateRelatorio/', [RelatorioController::class,'update'])->name('relatorio.update');
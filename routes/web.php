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

Route::get('/', [FilmeController::class,'index']);
Route::get('/create/', [FilmeController::class,'create']);
/*Route::get('/insert/', 'FilmeController@insertFilme');
Route::get('/delete/', 'FilmeController@deleteFilme');
Route::get('/update/', 'FilmeController@updateFilme');
*/
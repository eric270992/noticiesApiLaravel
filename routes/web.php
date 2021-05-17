<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorsController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\CategoriaController;

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

Route::resource('noticies', NoticiaController::class);

Route::get('/assignCategory', [NoticiaController::class,'assignCategory']);

Route::resource('autors', AutorsController::class);

Route::resource('categorias', CategoriaController::class);

Route::get("/categoria/{id}/noticies",[CategoriaController::class,"getNoticiesCategoria"]);

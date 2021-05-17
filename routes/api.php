<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorsController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/noticias",[NoticiaController::class,'getAll']);
Route::get("/noticia/{id}",[NoticiaController::class,'getById']);

Route::get("/autors",[AutorsController::class,'getAll']);

//Retorna les noticies de una categoria
Route::get("/categoria/{id}/",[CategoriaController::class,"getNoticiesCategoria"]);

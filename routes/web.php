<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HerramientaController;
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

Route::get('/inicio',[HerramientaController::class,'inicio'])->name('inicio');
Route::get('/categorias','App\Http\Controllers\RelacionController@index')->name('categorias');
Route::get('/api',[HerramientaController::class,'api'])->name('api');




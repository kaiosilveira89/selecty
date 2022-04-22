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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::prefix('/')->group(function(){
    Route::get('/', [\App\Http\Controllers\CadastrosController::class, 'index'])->name('cadastros-index');
    Route::get('/create', [\App\Http\Controllers\CadastrosController::class, 'create'])->name('cadastros-create');
    Route::post('/', [\App\Http\Controllers\CadastrosController::class, 'store'])->name('cadastros-store');
    Route::get('/{id}/edit', [\App\Http\Controllers\CadastrosController::class, 'edit'])->where('id', '[0-9]+')->name('cadastros-edit');
    Route::put('/{id}', [\App\Http\Controllers\CadastrosController::class, 'update'])->where('id', '[0-9]+')->name('cadastros-update');
    Route::delete('/{id}', [\App\Http\Controllers\CadastrosController::class, 'destroy'])->where('id', '[0-9]+')->name('cadastros-destroy');



});

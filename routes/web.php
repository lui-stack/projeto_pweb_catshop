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

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\GatoController;
Route::get('/',function(){
    return view('welcome');
});

Route::prefix('cliente')->group(function () {
    Route::get('/', [ClienteController::class, 'index'])->name('cliente.index');
    Route::get('/create', [ClienteController::class, 'create'])->name('cliente.create');
    Route::post('/store', [ClienteController::class, 'store'])->name('cliente.store');
    Route::delete('/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy');
    Route::get('/edit/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
    Route::put('/update/{id}', [ClienteController::class, 'update'])->name('cliente.update');
    Route::post('/search', [ClienteController::class, 'search'])->name('cliente.search');
});


Route::prefix('funcionario')->group(function () {
    Route::get('/', [FuncionarioController::class, 'index'])->name('funcionario.index');
    Route::get('/create', [FuncionarioController::class, 'create'])->name('funcionario.create');
    Route::post('/store', [FuncionarioController::class, 'store'])->name('funcionario.store');
    Route::delete('/{id}', [FuncionarioController::class, 'destroy'])->name('funcionario.destroy');
    Route::get('/edit/{id}', [FuncionarioController::class, 'edit'])->name('funcionario.edit');
    Route::put('/update/{id}', [FuncionarioController::class, 'update'])->name('funcionario.update');
    Route::post('/search', [FuncionarioController::class, 'search'])->name('funcionario.search');
});


Route::prefix('gato')->group(function () {
    Route::get('/', [GatoController::class, 'index'])->name('gato.index');
    Route::get('/create', [GatoController::class, 'create'])->name('gato.create');
    Route::post('/store', [GatoController::class, 'store'])->name('gato.store');
    Route::delete('/{id}', [GatoController::class, 'destroy'])->name('gato.destroy');
    Route::get('/edit/{id}', [GatoController::class, 'edit'])->name('gato.edit');
    Route::put('/update/{id}', [GatoController::class, 'update'])->name('gato.update');
    Route::post('/search', [GatoController::class, 'search'])->name('gato.search');
});

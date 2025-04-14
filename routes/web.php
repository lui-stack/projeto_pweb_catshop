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
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente',
    [clienteController::class,'index'])->name('cliente.index');

Route::get('/cliente/create',
     [clienteController::class,'create'])->name('cliente.create');

Route::post('/cliente/store',
     [clienteController::class,'store'])->name('cliente.store');

Route::delete('cliente/{id}',
     [AlunoController::class,'destroy'])
     ->name('cliente.destroy');

Route::get('/cliente/edit/{id}',
     [clienteController::class,'edit'])->name('cliente.edit');

Route::put('/cliente/update/{id}',
     [clienteController::class,'update'])->name('cliente.update');

Route::post('/cliente/search',
     [clienteController::class,'search'])->name('cliente.search');

<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ContactosController;
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

Route::get('/', [ContactosController::class, 'index'])->name('contactos.index');
Route::post('/contacto-store', [ContactosController::class, 'store'])->name('contactos.store');
Route::get('/edit/{id_contacto}', [ContactosController::class, 'edit'])->name('contactos.edit');
Route::put('/update/{id}', [ContactosController::class, 'update'])->name('contactos.update');
Route::get('/show/{id}', [ContactosController::class, 'show'])->name('contactos.show');
Route::get('/destroy/{id}', [ContactosController::class, 'destroy'])->name('contactos.destroy');

Route::get('/categoria-index', [CategoriasController::class, 'index'])->name('categorias.index');
Route::post('/categoria-store', [CategoriasController::class, 'store'])->name('categorias.store');
Route::get('/categoria-edit/{id}', [CategoriasController::class, 'edit'])->name('categorias.edit');
Route::put('/categoria-update/{id}', [CategoriasController::class, 'update'])->name('categorias.update');
Route::get('/categoria-destroy/{id}', [CategoriasController::class, 'destroy'])->name('categorias.destroy');
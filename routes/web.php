<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/genero', [GeneroController::class, 'genero'])->name('genero');
Route::get('/filme', [FilmeController::class, 'filme'])->name('filme');
Route::post('/store', [GeneroController::class, 'store'])->name('store');
Route::get('/genero/edit/{id}', [GeneroController::class, 'edit'])->name('genero.edit');
Route::post('/genero/update/{id}', [GeneroController::class, 'update'])->name('genero.update');
Route::get('/filme/edit/{id}', [FilmeController::class, 'edit'])->name('filme.edit');
Route::post('/filme/update/{id}', [FilmeController::class, 'update'])->name('filme.update');

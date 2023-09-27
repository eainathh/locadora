<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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
Route::middleware('auth')->prefix('admin/')->name('admin.')->group(function () {
});

Route::get('/genero', [GeneroController::class, 'genero'])->name('genero');
Route::get('/filme', [FilmeController::class, 'filme'])->name('filme');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/store', [GeneroController::class, 'store'])->name('store');
Route::post('/storefilme', [FilmeController::class, 'store'])->name('store.filme');
Route::get('/genero/edit/{id}', [GeneroController::class, 'edit'])->name('genero.edit');
Route::post('/genero/update/{id}', [GeneroController::class, 'update'])->name('genero.update');
Route::get('/filme/edit/{id}', [FilmeController::class, 'editFilme'])->name('filme.edit');
Route::post('/filme/update/{id}', [FilmeController::class, 'updateFilme'])->name('filme.update');
Route::delete('/filme/{id}', [FilmeController::class, 'destroy'])->name('destroy');

Auth::routes();


Route::get('/', [HomeController::class,'index'])->name('home');

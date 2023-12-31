<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocacoesController;
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

Route::get('/filtrar-por-genero',[FilmeController::class,'buscarPorGenero'])->name('buscarPorGenero');
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
Route::delete('/genero/{id}', [GeneroController::class, 'destroyg'])->name('destroyg');

Route::get('/meus-filmes', [LocacoesController::class, 'meusFilmes'])->name('meus-filmes');
Route::post('/locar/{id}', [LocacoesController::class,'locarfilme'])->name('locarfilme');
Route::post('/devolver/{id}', [LocacaoController::class, 'devolver'])->name('devolver');




Auth::routes();


Route::get('/', [HomeController::class,'index'])->name('home');

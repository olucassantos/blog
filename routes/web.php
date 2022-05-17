<?php

use App\Http\Controllers\PostagensController;
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

Route::get('/postagens', [PostagensController::class, 'index'])->name('postagens.index');

Route::get('/postagens/{id}', [PostagensController::class, 'show'])->name('postagens.show');

Route::get('/postagens/novo', [PostagensController::class, 'create'])->name('postagens.create');

Route::post('/postagens', [PostagensController::class, 'store'])->name('postagens.store');

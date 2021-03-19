<?php

use App\Http\Controllers\MovimentacaoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/', [UsuarioController::class, 'login'])->name('home');

Route::match(['get', 'post'], '/login', [UsuarioController::class, 'login'])->name('login');
Route::match(['get', 'post'], '/sair', [UsuarioController::class, 'sair'])->name('sair');


Route::middleware('auth')->prefix('admin')->name('admin.')->group(function() {
    Route::match(['get', 'post'], '/', [UsuarioController::class, 'index'])->name('home');

    Route::match(['get', 'post'], '/usuario', [UsuarioController::class, 'novo'])->name('home.usuario');

    Route::match(['get', 'post'], '/movimentacao', [MovimentacaoController::class, 'index'])->name('movimentacao');

    Route::match(['get', 'post'], '/movimentacao/novo', [MovimentacaoController::class, 'novo'])->name('movimentacao.novo');
});

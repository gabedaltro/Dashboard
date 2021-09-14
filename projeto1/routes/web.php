<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PainelController;

use App\Http\Controllers\ProdutoController;

use App\Http\Controllers\RelatorioController;

Route::get('/logout', [PainelController::class, 'logout'])->middleware('auth');

Route::get('/', [ProdutoController::class, 'index'])->middleware('auth');

Route::post('/', [ProdutoController::class, 'store'])->middleware('auth');

Route::get('/cadastrar/produto', [ProdutoController::class, 'produto'])->middleware('auth');

Route::get('/painel-de-controle', [PainelController::class, 'index'])->middleware('auth');

Route::get('/painel-de-controle/create', [PainelController::class, 'create'])->middleware('auth');

Route::get('/painel-de-controle/edit/{id}', [PainelController::class, 'index'])->middleware('auth');

Route::put('/painel-de-controle/update/{id}', [PainelController::class, 'update'])->middleware('auth');

Route::get('/relatorios/comercial/clientes', [RelatorioController::class, 'clientes'])->middleware('auth');

Route::get('/relatorios/comercial/produtos', [RelatorioController::class, 'produtos'])->middleware('auth');

Route::get('/action', [PainelController::class, 'action']);


Route::fallback(function () {
    return view('painel.error');
});




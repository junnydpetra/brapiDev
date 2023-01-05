<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{BrapiDevController,
                          DashboardController,
                          StockInfoController,
                          CarteiraController,
                          ExtratoController,
                          OperacoesController};

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/stock_info/{api}', [StockInfoController::class, 'stockInfo'])->name('stockInfo');
Route::get('/stock_info_modal/{api}', [StockInfoController::class, 'stockInfoModal'])->name('stockInfoModal');
Route::get('/carteira', [CarteiraController::class, 'carteira'])->name('carteira');
Route::get('/extrato', [ExtratoController::class, 'extrato'])->name('extrato');
Route::get('/deposito', [OperacoesController::class, 'deposito'])->name('deposito');
Route::get('/saque', [OperacoesController::class, 'saque'])->name('saque');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{BrapiDevController,
                          DashboardController,
                          StockInfoController};

Route::get('/', [BrapiDevController::class, 'stocks']);
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/stock_info/{api}', [StockInfoController::class, 'stockInfo'])->name('stockInfo');

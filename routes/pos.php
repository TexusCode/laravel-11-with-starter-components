<?php

use App\Http\Controllers\Pos\PosController;
use App\Http\Controllers\Revisor\RevisorController;
use Illuminate\Support\Facades\Route;

Route::middleware(['pos', 'auth'])->prefix('pos')->group(function () {
    //Pos
    Route::get('/pos', [PosController::class, 'pos'])->name('pos');
});
Route::middleware(['revisor', 'auth'])->prefix('revisor')->group(function () {
    //Pos
    Route::get('/revisor_dash', [RevisorController::class, 'revisor_dash'])->name('revisor_dash');
});

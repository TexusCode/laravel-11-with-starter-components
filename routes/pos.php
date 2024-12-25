<?php

use App\Http\Controllers\Pos\PosController;
use Illuminate\Support\Facades\Route;

Route::middleware(['pos', 'auth'])->prefix('pos')->group(function () {
    //Pos
    Route::get('/pos', [PosController::class, 'pos'])->name('pos');
});

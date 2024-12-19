<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['admin', 'guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/loginpost',[AuthController::class,'loginpost'])->name('loginpost');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/registerpost', [AuthController::class, 'registerpost'])->name('registerpost');
});

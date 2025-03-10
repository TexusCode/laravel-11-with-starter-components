<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/loginpost',[AuthController::class,'loginpost'])->name('loginpost');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/registerpost', [AuthController::class, 'registerpost'])->name('registerpost');
});
Route::middleware('auth')->group(function () {
    Route::post('/logout',[AuthController::class, 'logout'])->name('logout')->middleware('pin');
    Route::get('/pin-confirm', function () {
        return view('pin-confirm'); // Страница для ввода PIN
    })->name('pin.confirm');
});

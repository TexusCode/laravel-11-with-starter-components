<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Azs\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/loginpost', [AuthController::class, 'loginpost'])->name('loginpost');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/registerpost', [AuthController::class, 'registerpost'])->name('registerpost');
});
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('pin');
    Route::get('/pin-confirm', function () {
        return view('pin-confirm'); // Страница для ввода PIN
    })->name('pin.confirm');
});

Route::get('/updated-data', [DashboardController::class, 'updatedData'])->name('updatedData');


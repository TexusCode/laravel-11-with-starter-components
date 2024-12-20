<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::middleware(['admin', 'auth'])->prefix('admin')->group(function () {
//     Route::get('/', function () {
//         return view('welcome');
//     });
// });
// Route::middleware(['admin', 'auth'])->group(function () {
//     Route::get('/', function () {
//         return view('welcome');
//     });
// });
Route::middleware(['admin', 'auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
});

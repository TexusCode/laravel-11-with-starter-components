<?php

use App\Http\Controllers\Controller;
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
Route::middleware(['admin', 'guest'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', [Controller::class, 'index'])->name('user');
});

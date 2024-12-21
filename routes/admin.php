<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
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
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    //Products
    Route::get('/products', [ProductController::class, 'products'])->name('products');
    Route::get('/add-product', [ProductController::class, 'add_product'])->name('add-product');
});

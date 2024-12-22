<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UnitController;
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
    Route::get('/add-product-post/{id}', [ProductController::class, 'add_product_post'])->name('add-product-post');
    //Categories
    Route::get('/categories', [CategoryController::class, 'categories'])->name('categories');
    Route::post('/add-category-post', [CategoryController::class, 'add_category_post'])->name('add-category-post');
    Route::post('/delete-category-post', [CategoryController::class, 'delete_category_post'])->name('delete-category-post');
    //Brands
    Route::get('/brands', [BrandController::class, 'brands'])->name('brands');
    Route::post('/add-brand-post', [BrandController::class, 'add_brand_post'])->name('add-brand-post');
    //Units
    Route::get('/units', [UnitController::class, 'units'])->name('units');
    Route::post('/add-unit-post', [UnitController::class, 'add_unit_post'])->name('add-unit-post');

});

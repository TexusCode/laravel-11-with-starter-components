<?php

use App\Http\Controllers\Admin\BuysController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmpliyoneController;
use App\Http\Controllers\ExprnditureController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Revisor\RevisorController;
use App\Http\Controllers\SupplierController;
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
    Route::get('/add-product/{id?}', [ProductController::class, 'add_product'])->name('add-product');
    Route::post('/add-product-post/{id?}', [ProductController::class, 'add_product_post'])->name('add-product-post');
    Route::post('/delete-product-post/{id}', [ProductController::class, 'delete_product_post'])->name('delete-product-post');
    Route::post('/product-search', [ProductController::class, 'product_search'])->name('product-search');
    //Categories
    Route::get('/categories', [CategoryController::class, 'categories'])->name('categories');
    Route::post('/add-category-post', [CategoryController::class, 'add_category_post'])->name('add-category-post');
    Route::post('/delete-category-post{id}', [CategoryController::class, 'delete_category_post'])->name('delete-category-post');
    //Brands
    Route::get('/brands', [BrandController::class, 'brands'])->name('brands');
    Route::post('/add-brand-post', [BrandController::class, 'add_brand_post'])->name('add-brand-post');
    Route::post('/delete-brand-post/{id}', [BrandController::class, 'delete_brand_post'])->name('delete-brand-post');
    //Units
    Route::get('/units', [UnitController::class, 'units'])->name('units');
    Route::post('/add-unit-post', [UnitController::class, 'add_unit_post'])->name('add-unit-post');
    Route::post('/delete-unit-post/{id}', [UnitController::class, 'delete_unit_post'])->name('delete-unit-post');
    //Suppliers
    Route::get('/suppliers', [SupplierController::class, 'suppliers'])->name('suppliers');
    Route::post('/add-supplier-post', [SupplierController::class, 'add_supplier_post'])->name('add-supplier-post');
    Route::post('/delete-supplier-post/{id}', [SupplierController::class, 'delete_supplier_post'])->name('delete-supplier-post');
    //Expenditures
    Route::get('/expenditures', [ExprnditureController::class, 'expenditures'])->name('expenditures');
    Route::post('/add-expenditure', [ExprnditureController::class, 'add_expenditure'])->name('add-expenditure');
    Route::post('/delete-expenditure/{id}', [ExprnditureController::class, 'delete_expenditure'])->name('delete-expenditure');
    //Empliyones
    Route::get('/empliyones/{id?}', [EmpliyoneController::class, 'empliyones'])->name('empliyones');
    Route::post('/add-empliyone/{id?}', [EmpliyoneController::class, 'add_empliyone'])->name('add-empliyone');
    Route::post('/delete-empliyone/{id}', [EmpliyoneController::class, 'delete_empliyone'])->name('delete-empliyone');
    Route::post('/status-empliyone/{id}', [EmpliyoneController::class, 'status_empliyone'])->name('status-empliyone');
    //Orders
    Route::get('/orders', [OrderController::class, 'orders'])->name('orders');
    Route::get('/order-returns', [OrderController::class, 'order_returns'])->name('order-returns');
    //Customers
    Route::get('/customers', [CustomerController::class, 'customers'])->name('customers');
    //Changes
    Route::get('/changes', [ChangeController::class, 'changes'])->name('changes');
    Route::get('/revision', [RevisorController::class, 'revision'])->name('revision');
    Route::post('/revision_post', [RevisorController::class, 'revision_post'])->name('revision_post');
    //buys
    Route::get('buys-get', [BuysController::class, 'buys_get'])->name('buys-get');
});

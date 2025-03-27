<?php

use App\Http\Controllers\Azs\AdminController;
use App\Http\Controllers\Azs\CardController;
use App\Http\Controllers\Azs\CheckoutController;
use App\Http\Controllers\Azs\CloseController;
use App\Http\Controllers\Azs\DashboardController;
use App\Http\Controllers\Azs\ExpensesController;
use App\Http\Controllers\Azs\Fuelnormcontroller;
use App\Http\Controllers\Azs\HistoryController;
use App\Http\Controllers\Azs\HomeController;
use App\Http\Controllers\Azs\LoginController;
use App\Http\Controllers\Azs\PartnerController;
use Illuminate\Support\Facades\Route;

Route::get('/shahrinav', [HomeController::class, 'home'])->name('home');
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/checkout-post', [CheckoutController::class, 'checkoutpost'])->name('checkoutpost');

Route::get('/checkout-details', [CheckoutController::class, 'checkoutdetails'])->name('checkoutdetails');
Route::post('/checkout-cashon', [CheckoutController::class, 'checkoutcashon'])->name('checkoutcashon');
Route::post('/checkout-cashoff', [CheckoutController::class, 'checkoutcashoff'])->name('checkoutcashoff');

Route::get('/add-card', [CardController::class, 'addcard'])->name('addcard');
Route::post('/add-card-post', [CardController::class, 'addcardpost'])->name('addcardpost');

Route::get('/register-card', [CardController::class, 'registercard'])->name('registercard');
Route::post('/register-card-post', [CardController::class, 'registercardpost'])->name('registercardpost');

Route::post('/register-card-success-post', [CardController::class, 'registercardsuccesspost'])->name('registercardsuccesspost');

Route::get('/checkout-success', [CardController::class, 'checkoutsuccess'])->name('checkoutsuccess');
Route::post('/checkout-update', [CardController::class, 'checkoutupdate'])->name('checkoutupdate');

Route::get('/fuel-norm', [Fuelnormcontroller::class, 'fuelnorm'])->name('fuelnorm');
Route::post('/fuel-norm-post', [Fuelnormcontroller::class, 'fuelnormpost'])->name('fuelnormpost');

Route::get('/history', [HistoryController::class, 'history'])->name('history');

Route::get('/expenses', [ExpensesController::class, 'expenses'])->name('expenses');
Route::post('/expenses-post', [ExpensesController::class, 'expensespost'])->name('expensespost');

Route::get('/close', [CloseController::class, 'close'])->name('close');
Route::post('/close-post', [CloseController::class, 'closepost'])->name('closepost');
Route::get('/partner', [PartnerController::class, 'partner'])->name('partner');
Route::post('/partner-post', [PartnerController::class, 'partnerpost'])->name('partnerpost');



// Admin page


Route::post('/smssend', [AdminController::class, 'smssend'])->name('smssend');

Route::middleware(['admin', 'auth'])->prefix('admin')->group(function () {
    Route::get('/dash', [DashboardController::class, 'dash'])->name('dash');
    Route::get('/transh', [DashboardController::class, 'transh'])->name('transh');
    Route::get('/ras', [DashboardController::class, 'ras'])->name('ras');
    Route::get('/cards', [DashboardController::class, 'cards'])->name('cards');

    Route::get('/fuelbag', [DashboardController::class, 'fuelbag'])->name('fuelbag');
    Route::post('/fuelbagpost', [DashboardController::class, 'fuelbagpost'])->name('fuelbagpost');
});

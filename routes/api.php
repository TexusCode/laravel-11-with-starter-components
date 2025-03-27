<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\PosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/user', [PosController::class, 'user']);
Route::post('/azs-get-data', [ApiController::class, 'azsGetData']);
Route::post('/azs-send-data', [ApiController::class, 'azsSendData'])->name('azsSendData');

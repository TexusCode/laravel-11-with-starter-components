<?php

use App\Http\Controllers\Api\PosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/user',[PosController::class,'user']);

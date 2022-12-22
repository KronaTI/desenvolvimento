<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RamalController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\TmsController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/ramais', [RamalController::class, 'ramal']);
Route::get('/manual', [ManualController::class, 'manual']);
Route::get('/tms', [TmsController::class, 'tms']);
   
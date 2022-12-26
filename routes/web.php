<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RamalController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\TmsController;
use App\Http\Controllers\ProvaController;
use App\Http\Controllers\TreinadorController;
use App\Http\Controllers\ProvaK1Controller;



Route::get('/', [HomeController::class, 'index']);
Route::get('/ramais', [RamalController::class, 'ramal']);
Route::get('/manual', [ManualController::class, 'manual']);
Route::get('/tms', [TmsController::class, 'tms']);
Route::get('/provas', [ProvaController::class, 'prova']);
Route::get('/provas/treinador', [TreinadorController::class, 'treinador']);
Route::get('/provas/prova-k1', [ProvaK1Controller::class, 'provak1']);
   
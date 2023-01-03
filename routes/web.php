<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RamalController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\TmsController;
use App\Http\Controllers\ProvaController;
use App\Http\Controllers\TreinadorController;
use App\Http\Controllers\ProvaK1Controller;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PesquisaController;
use App\Http\Controllers\CadastroRamalController;
use App\Http\Controllers\AcessoController;
use App\Http\Controllers\ADMPrincipal;



Route::get('/', [HomeController::class, 'index']);
Route::get('/ramais', [RamalController::class, 'ramal']);
Route::get('/manual', [ManualController::class, 'manual']);
Route::get('/tms', [TmsController::class, 'tms']);
Route::get('/provas', [ProvaController::class, 'prova']);
Route::get('/provas/treinador', [TreinadorController::class, 'treinador']);
Route::get('/provas/prova-k1', [ProvaK1Controller::class, 'provak1']);
Route::get('/adm-geral/usuarios', [UsuariosController::class, 'usuario']);
Route::get('/provas/pesquisa', [PesquisaController::class, 'pesquisa']);   
Route::get('/adm-geral/cadastro-ramais', [CadastroRamalController::class, 'createramal']);
Route::get('/acesso', [AcessoController::class, 'acessar']);
Route::get('/adm-geral/adm-principal', [ADMPrincipal::class, 'principal']);
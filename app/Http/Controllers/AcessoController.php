<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcessoController extends Controller
{
    public function Acessar(){
        return view('/acesso');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesquisaController extends Controller
{
    public function Pesquisa(){
        return view('/provas/pesquisa');
    }
}

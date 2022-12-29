<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroRamalController extends Controller
{
    public function CreateRamal(){
        return view('/adm-geral/cadastro-ramais');
    }
}

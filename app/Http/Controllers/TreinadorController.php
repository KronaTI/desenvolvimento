<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreinadorController extends Controller
{
    public function Treinador(){
        return view('/provas/treinador');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function Usuario(){
        return view('/adm-geral/usuarios');
    }
}

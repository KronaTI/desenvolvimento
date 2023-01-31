<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UsuariosController extends Controller
{
    public function usuario(){
        return view('/adm-geral/usuarios');
        
        
        
    }
}

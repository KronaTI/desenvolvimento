<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ADMPrincipal extends Controller
{
    public function Principal(){
        return view('/adm-geral/adm-principal');
    }
}

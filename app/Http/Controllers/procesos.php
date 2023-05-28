<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class procesos extends Controller
{
    public function mostrarFormulario(){
        return view('formulario');
    }
    public function mostrarConfirmacion(){
        return view('confirmacion');
    }
}

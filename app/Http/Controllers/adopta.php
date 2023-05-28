<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adopta extends Controller
{
    public function mostrarPerro(){
        return view('perros');
    }
    public function mostrarGato(){
        return view('gatos');
    }
    public function mostrarOtros(){
        return view('otros');
    }
}

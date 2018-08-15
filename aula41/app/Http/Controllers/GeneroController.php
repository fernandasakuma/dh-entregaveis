<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Generos;

class GeneroController extends Controller
{
    public function exibir($id) { 
        $genero = Generos::find($id);
        return view('generos.exibir')->with('genero', $genero);
    }
}

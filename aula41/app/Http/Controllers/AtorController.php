<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ator;

class AtorController extends Controller
{
    public function exibirAtores(){

        $atores=Ator::paginate(5);
        $atoresMaiorSete=Ator::where('rating','>',7)->paginate(5);

        return view('todosAtores')->with('atoresblade', $atoresMaiorSete);
    }

}


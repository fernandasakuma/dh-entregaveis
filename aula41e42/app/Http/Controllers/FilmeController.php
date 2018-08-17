<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;

class FilmeController extends Controller
{
    public function exibirFilmes(){
        $filmes=Filme::paginate(5);
        return view('todosFilmes')->with('filmes', $filmes);
    }

    public function filmesComedia(){
        $filmescomedia=Filme::where('genre_id','=','1')->paginate(5);
        return view('todosFilmes')->with('filmes', $filmescomedia);
    }

    public function atoresComedia(){
        $filmescomedia=Filme::where('genre_id','=','1')->paginate(5);
        return view('atorescomedia')->with('filmes', $filmescomedia);
    }


    
}
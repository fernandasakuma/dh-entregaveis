<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function procurarFilmesId($id) {
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
            ];
        $nome = $filmes[$id];
        return view ('filmes')
        ->with('nomeDoFilme',$nome);
    }

    public function procurarFilmeNome($nome) {
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
            ];

        foreach ($filmes as $key => $value){
            if ($nome == $value){
                $resultado = $key;
                break;
            } else {
                $resultado = "Não encontrado";
            }
        
        } 

        return view ('filmesPorNome')->with('idFilme',$resultado);
              
    }
}

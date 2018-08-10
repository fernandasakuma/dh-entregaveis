<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Filme;

class FilmeController extends Controller
{
    public function delete($id){
        $filme = Filme::find($id);
        $filme->delete();

        return 'Filme excluido!';
    }

    public function exibirForm(){
        return view('formFilme');
    }

    public function exibirFilmes(){
        $filmes=Filme::all();

        return view('todosFilmes')->with('filmes', $filmes);
    }

    public function editForm($id){
        $filmes=Filme::find($id);

        return view('editForm')->with('filme', $filmes);
    }

    public function cadastrar( Request $request){
        $this->validate($request, [
            'title'=> 'required',
            'rating'=> 'numeric|min:0|max:10',
            'awards' => 'numeric|min:0',
            'length' => 'numeric|min:0|max:100'
        ]);
           $filme = Filme::create([
               'title'=> $request->input('title'),
               'rating'=> $request->input('rating'),      
               'awards'=> $request->input('awards'),
               'length'=> $request->input('length'),
               'release_date'=>'2000-01-01'
           ]);

           $sucesso = $filme->save();

           if($sucesso){       
        return view('formFilme')->with('sucesso',true);
    } else {
        return view('formFilme')->with('erro', true);
    }   
}
}


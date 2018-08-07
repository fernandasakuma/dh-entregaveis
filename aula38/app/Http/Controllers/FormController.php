<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Filmes;

class FormController extends Controller
{
    public function form() {
        return view('form');
    }   

    public function adicionar (Request $request) {
      $this->validate($request,[
            'title' => 'required',
            'rating' => 'numeric|max:10',
        ]);
      $filme = Filmes::create(['title' => $request->input('title'), 
      'rating' => $request->input('rating'), 
      'release_date' => '2000-01-01']);
      $filme->save();
        return view('validado');
    }



}


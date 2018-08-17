<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generos extends Model
{
    protected $table = "genres";

    public function getIsActive(){
        if($this->active) {
            return "Sim";
        } else {
            return "Não";
        }
        }


    public function filmes() {
        return $this->hasMany(Filme::class, 'genre_id','id');
    }
}

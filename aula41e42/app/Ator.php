<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{
    protected $table = 'actors';


    public function filmes(){
        return $this->belongsToMany(Filme::class, 'actor_movie', 'movie_id','actor_id');
    }
}

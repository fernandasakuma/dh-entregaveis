<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'movies';

    protected $fillable = ['title', 'rating', 'awards', 'length', 'release_date'];

    public function genero(){
        return $this->hasOne(Generos::class,'id','genre_id');
    }

    public function atores(){
        return $this->belongsToMany(Ator::class, 'actor_movie', 'actor_id', 'movie_id');
    }
}

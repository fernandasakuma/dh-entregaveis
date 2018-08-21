<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'movies';
    
    protected $fillable = ['title', 'rating', 'awards', 'length', 'release_date'];

    public function getReleaseDate(){
        $release_date = new \Datetime($this->release_date);
        return $release_date->format('d/m/Y');
    }

    public function getReleaseDateToInput(){
        $release_date = new \Datetime($this->release_date);
        return $release_date->format('Y-m-d');
    }

    public function genero() {
        return  $this->hasOne(Generos::class, 'id','genre_id');
    }

    public function ator() {
        return $this->hasMany(Ator::class, 'id', 'favorite_movie_id');
    }
}

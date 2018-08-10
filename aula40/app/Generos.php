<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generos extends Model
{
    protected $table = 'genres';

    public function filmes() {
        return $this->hasMany(Filmes::class, 'genre_id', 'id');
    }
}

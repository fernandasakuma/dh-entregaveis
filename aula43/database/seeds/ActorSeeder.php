<?php

use Illuminate\Database\Seeder;
use App\Ator;
use App\Filme;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actors = factory(Ator::class)->times(10)->create();
        $movies = factory(Filme::class)->times(10)->create();

        foreach($movies as $movie){
            $movie->atores()->sync($actors->random(3));
        }
    }
}

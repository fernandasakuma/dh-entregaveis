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

        $movies=Filme::all();
        foreach($movies as $movie){
            $movie->atores()->sync($actors->unique()->random(3));
        }
    }
}

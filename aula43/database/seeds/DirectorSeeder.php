<?php

use Illuminate\Database\Seeder;
use App\Director;
use App\Filme;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Director::class)->times(10)->create();

        $directors = factory(Director::class,10)->create();

        foreach ($directors as $director){
            //criamos 5 filmes para cada diretor
            factory(Filme::class, 5)->create([
                'director_id'=>$director->id,
            ]);
        }
    }
}

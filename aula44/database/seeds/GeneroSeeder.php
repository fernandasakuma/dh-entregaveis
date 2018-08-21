<?php

use Illuminate\Database\Seeder;
use App\Generos;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        //$genero = Generos::create(['name'=>'Genero 1','ranking'=> 23]);
        //$genero->active = true;
        //$genero->save();

        //$genero = Generos::create(['name'=>'Genero 2','ranking'=> 30]);
        //$genero->active = true;
        //$genero->save();        

        $generos = factory(Generos::class)->times(50)->create();
    }
}

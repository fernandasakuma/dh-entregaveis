<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
   

Route::get('/filmes', 'FilmeController@exibirFilmes');

Route::get('/filmescomedia', 'FilmeController@filmescomedia');

Route::get('/atorescomedia', 'FilmeController@atorescomedia');

Route::get('/genero/{id}', 'GeneroController@exibir');

Route::get('/atores', 'AtorController@exibirAtores');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

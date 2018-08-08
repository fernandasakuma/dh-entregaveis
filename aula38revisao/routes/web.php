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

Route::get('/formFilme', 'FilmeController@exibirForm');

Route::post('/cadastrar', 'FilmeController@cadastrar');

Route::get('/filmes', 'FilmeController@exibirFilmes');

Route::get('/filme/edit/{id}', 'FilmeController@editForm');

Route::post('/filme/edit/{id}', 'FilmeController@update');

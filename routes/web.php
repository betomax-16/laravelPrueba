<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/hola/{nombre?}', function($nombre='desconocido') {
  return 'hola mundo!! by: '.$nombre;
});*/

Route::group(['prefix' => 'admin'], function(){
  Route::resource('usuarios','UsuariosController');
});

Route::group(['prefix' => 'admin'], function(){
  Route::resource('categorias','CategoriasController');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

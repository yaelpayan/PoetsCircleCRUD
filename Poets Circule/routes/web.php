<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/show', 'Newcontr@index');
Route::get('/insert', 'Newcontr@create');
Route::post('/save', 'Newcontr@store');
Route::get('/detail/{id}', 'Newcontr@show');
Route::post('/update', 'Newcontr@update');
Route::get('/delete/{id}', 'Newcontr@destroy');

Route::get('/', function () {
    return view('login',[
        'title'=>'Inicio de sesion'
    ]);
});


Route::get('/login',[
    'uses'=>'controlador@login',
    'as'=>'Inicio de sesion'
]);

Route::post('/check',[
    'uses'=>'controlador@validacion',
    'as'=> 'validacion de datos'
]);
  
Route::get('/dali',[
    'uses'=> 'controlador@dali',
    'as'=> 'pagina salvador dali'
]);

Route::get('/vincent',[
    'uses'=> 'controlador@vincent',
    'as'=> 'pagina vincent'
]);

Route::get('/davinci',[
    'uses'=> 'controlador@davinci',
    'as'=> 'pagina leo davinci'
]);

Route::get('/picasso',[
    'uses'=> 'controlador@picasso',
    'as'=> 'pagina picasso'
]);
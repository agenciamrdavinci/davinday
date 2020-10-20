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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::prefix('/')->group(function(){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/user', 'UserController')->name('index','user');
    
    Route::resource('/projetos', 'ProjetosController')->name('index','projetos');
    Route::get('/projetos/apagar/{id}', 'ProjetosController@destroy');
    Route::post('/projetos/create', 'ProjetosController@create');
    Route::get('/projetos/editar/{id}', 'ProjetosController@edit');
    Route::post('/projetos/{id}', 'ProjetosController@update');


    Route::resource('/jobs', 'JobsController')->name('index','jobs');
    Route::get('/jobs/apagar/{id}', 'JobsController@destroy');
    Route::post('/jobs/create', 'JobsController@create');
    Route::get('/jobs/editar/{id}', 'JobsController@edit');
    Route::post('/jobs/{id}', 'JobsController@update');


    Route::resource('/equipe', 'EquipeController')->name('index','equipe');
    Route::get('/equipe/apagar/{id}', 'EquipeController@destroy');
    Route::post('/equipe/create', 'EquipeController@create');
    Route::get('/equipe/editar/{id}', 'EquipeController@edit');
    Route::post('/equipe/{id}', 'EquipeController@update');


    

    Route::resource('/horario', 'HorarioController')->name('index','horario');
    Route::get('/relatorios', 'RelatorioController@index')->name('relatorios');
    // Route::get('/equipe', 'EquipeController@index')->name('equipe');

    
    
});
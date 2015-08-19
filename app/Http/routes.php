<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses'=>'WelcomeController@index', 'as'=>'home']);


Route::get('/nada/posts/{id}/edit','AdminController@edit');
Route::post('/nada/posts/{id}/refresh','AdminController@refresh');
Route::post('/nada/posts/{id}/delete','AdminController@delete');
Route::get('prueba','WelcomeController@prueba');
Route::get('videobrian',['as'=>'videobrian','uses'=>'WelcomeController@videobrian']);
Route::get('laravel5',['as'=>'laravel','uses'=>'WelcomeController@laravel']);

Route::get('/nada/posts/new',[

  'as'=>'nuevo',
  'uses'=>'AdminController@nuevo'

	]);

Route::post('/nada/posts/new/creando','AdminController@crear');


Route::get('/nada',[

 'as'=>'administro',
 'uses'=>'AdminController@desktop',
 'middleware'=>'auth'

	]);

Route::get('/registro',[

 'as'=>'registrer',
 'uses'=>'AdminController@registrando'
 

	]);

Route::get('/logout',['as'=>'logout','uses'=>'AdminController@logout']);



Route::get('/articulos/{slug}',[
	'as'=>'article',
	'uses'=>'WelcomeController@article']);

Route::get('/tag/{tag}',[

	'as'=>'tagged',
	'uses'=>'WelcomeController@tags' 

	]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

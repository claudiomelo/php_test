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

Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/home', 'HomeController@index');
Route::get('/', 'consultaController@index');

Route::get('/auth/login', function () {
    return view('auth.login');
});

Route::get('teste', function(){
	return view('auth.loginpage');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/listConsulta', 'consultaController@index');
Route::get('/consulta', 'consultaController@create');

Route::post('/consultar', 'consultaController@store');

Route::get('/pesquisaDel/{id}', 'consultaController@destroy');

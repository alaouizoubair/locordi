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

Route::get('/', function () {
    return view('pages/home');
});

Route::group(['middleware' => 'auth'],function(){

	Route::get('/offre', 'OffresController@offre');


	Route::get('ajax/offreSearch',['as'=>'ajax.offreSearch','uses'=>'OffresController@offreSearch']);
	Route::get('ajax/offreSearchValide',['as'=>'ajax.offreSearchValide','uses'=>'OffresController@offreSearchValide']);

});





// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as'=>'auth.login', 'uses'=> 'Auth\AuthController@postLogin']);
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


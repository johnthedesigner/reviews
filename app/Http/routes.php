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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::resource('admin', 'AdminController');

Route::resource('reviews', 'ReviewController');

Route::resource('users', 'UserController');
Route::get('user/{user}', 'UserController@show');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Entrust::routeNeedsRole('admin', 'admin', Redirect::to('home'));
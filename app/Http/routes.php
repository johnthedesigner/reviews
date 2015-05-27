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

Route::resource('reviews', 'ReviewController');

// Auth controllers (from Laravel)
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Users section
Route::resource('users', 'UserController');

// Block off users section to super_admin
Entrust::routeNeedsRole('admin', 'super_admin', Redirect::to('home'));
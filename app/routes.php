<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('login', 'UsersController@showLogin');
Route::post('login', 'UsersController@doLogin');
Route::get('logout', array(
	'as'=>'logout',
	'uses'=>'UsersController@doLogout')
);

Route::get('signUp', 'UsersController@showSignUp');
Route::post('authenticateCode', 'UsersController@authenticateCode');
Route::post('requestCode', 'UsersController@requestCode');

Route::post('register', 'UsersController@showRegister');
Route::post('registerUser', 'UsersController@doRegister');

Route::get('dashboard', 'DashboardController@showDashboard');

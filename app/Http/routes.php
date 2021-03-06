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
    return view('welcome');
});

Route::get('about', function(){
	return 'About us';
});

Route::get('reporting', function(){
	return 'Reporting feature';
});

Route::get('bugfixes', function(){
	return 'BugFixes';
});

Route::get('developer', function(){
	return 'Selase';
});

Route::auth();

Route::get('/home', 'HomeController@index');

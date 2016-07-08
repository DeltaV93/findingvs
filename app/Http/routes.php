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

// Route::get('/admin', 'AdminController@index'); 
Route::resource('projects', 'ProjectController');
Route::post('projects/store', 'ProjectController@store');
// Route::get('projects/show/', 'ProjectController@store');
Route::get('/test', function() {
	return view('pages.projects.partials.form');
});


Route::auth();

// Route::get('/home', 'HomeController@index');

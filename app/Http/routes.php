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
Route::get('frontend', 'ProjectController@frontend');
Route::get('about', function(){
	return view('about');
});
Route::resource('/admin', 'AdminController'); 
Route::resource('projects', 'ProjectController');
Route::post('projects/store', 'ProjectController@store');
Route::get('/test', function() {
	return view('pages.projects.partials.form');
});


Route::auth();

// Route::get('/home', 'HomeController@index');


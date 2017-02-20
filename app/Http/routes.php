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
    return view('about');
});

Route::get('frontend', 'ProjectController@frontend');

// Route::get('about', function(){
// 	return view('about');
// });

Route::get('project', function(){
    return view('projects');
});

Route::get('project/moodbook', function(){
    return view('moodbook');
});

Route::get('project/estify', function(){
	return view('estify');
});

Route::resource('/resume', 'ResumeController@index');

Route::resource('/admin', 'AdminController');

Route::resource('projects', 'ProjectController');

// Route::resource('projects/moodbook', 'ProjectController@moodbook');

Route::post('projects/store', 'ProjectController@store');

Route::post('contact', ['as' => 'contact_store', 'uses' => 'ContactController@contact']);

Route::auth();

// Route::get('/home', 'HomeController@index');

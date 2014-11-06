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

Route::get('/', 'PageController@home');

Route::get('projects', 'PageController@projects');

Route::get('resume', 'PageController@resume');

Route::get('courses', 'PageController@courses');

Route::get('login', 'PageController@login');
Route::post('login', 'PageController@processLogin');

Route::post('logout', 'PageController@logout');

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{
	Route::get('/', 'AdminController@index');
});

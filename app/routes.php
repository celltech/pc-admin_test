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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/test', function()
{
    return getenv('DB_PASSWORD');
});
Route::resource('stores', 'StoresController', array('before' => 'assets'));

Route::any('boot', function()
{
	Asset::add('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
	Asset::add('bootstrap-js', 'http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js', 'jquery');
	Asset::add('bootstrap-css', 'http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css');
	$superheroes = array('Batman', 'Superman', 'Wolverine', 'Deadpool', 'Iron Man');
	return View::make('boot')->with('superheroes', $superheroes);
});
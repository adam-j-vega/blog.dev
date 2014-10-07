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

Route::get('/portfolio', function()
{
	return "This is my Portfolio";
});

Route::get('/rolldice/{guess}', function($guess){

	$randVar = rand(1,6);
	return View::make('roll-dice')->with('randVar', $randVar)->with('guess', $guess);
});

Route::get('/resume', 'ResumeController@showResume');

Route::get('/portfolio', 'PortfolioController@showPortfolio');

Route::get('/orm-test', function ()
{
	$post1 = new Post();

	$post1->title = 'Eloquent is awesome!';
	$post1->content  = 'It is super easy to create a new post.';
	$post1->save();

	$post2 = new Post();
	$post2->title = 'Post number two';
	$post2->content = 'The body for post number two.';
	$post2->save();
});

Route::resource('/posts', 'PostsController');
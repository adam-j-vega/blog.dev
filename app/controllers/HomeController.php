<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		Session::put('foo', 'bar');

		return View::make('hello');
	}
	public function showLogin()
	{
		return View::make('login');
	}
	public function doLogin()
	{
		$credentials = [
			'email' => Input::get('email'),
			'password' => Input::get('password')
			];
		$valid = Auth::attempt($credentials);
			if ($valid) {
				return Redirect::intended('posts.index');
			}else{
				return Redirect::back()->withInput();
			}
		}
	public function doLogout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}
}



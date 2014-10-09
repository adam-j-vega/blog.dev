<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{

		$posts = Post::paginate(4);

		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();
		return $this->savePost($post);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function show($id)
	{
		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)

	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		return $this->savePost($post);
	}

	protected function savePost(Post $post)
	{
		$validator = Validator::make(Input::all(),Post::$rules);

		if ($validator->fails()) {

			Session::flash('errorMessage', 'Your post must have a title and content');

			return Redirect::back()->withInput();
			// ->withErrors($validator));
		} else {
			$post->title = Input::get('title');
			$post->content = Input::get('content');
			$post->save();
	
			$message = 'Post created successfully';
			Session::flash('successMessage', $message);
			return Redirect::action('PostsController@show',$post->id);

		}
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::find($id);
		Post::delete();
	}

}

?>

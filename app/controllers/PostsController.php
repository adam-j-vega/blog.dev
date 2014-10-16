<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();

	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	public function index()
	{	
		$search = Input::get('search');

		$query = Post::with('user');

		$query->where('title', 'like', "%$search%");

		$query->orWhere('content', 'like', "%$search%");

		$posts = $query->orderBy('created_at', 'desc')->paginate(4);

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
		$user_id = $post->user_id;
		$user = User::find($user_id);

		if(!$post){
			App::abort(404);
		}

		return View::make('posts.show')->with('post', $post)->with('user', $user);
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

			Log::error('Post validator failed', Input::all());

			return Redirect::back()->withInput();

			// ->withErrors($validator));
		} else {

			$post->title = Input::get('title');
			$post->content = Input::get('content');

			$post->user_id = Auth::id();


			if(Input::hasFile('image')) {
				$file = Input::file('image');
				$destination_path = public_path() . '/img/';
				$filename = str_random(6) . '_' . $file->getClientOriginalName();
				$uploadSuccess = $file->move($destination_path, $filename);
				$post->image_name = '/img/' . $filename;
			}

			$post->save();
	
			$message = 'Post was successfully saved';

			Session::flash('successMessage', $message);

			Log::info('Post was successfully saved', Input::all());

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
		$post = Post::find($id);
		if(!$post){
			App::abort(404);
		}
		$post->delete();

		Session::flash('successMessage', 'Post was successfully deleted');

		Log::info('Post was deleted successfully');

		return Redirect::action('PostsController@index');
	}

}

?>

@extends('layouts.postsTemplate')

@section('content')

<div>
	<form method='POST' action="{{{ action('PostsController@store') }}}">
		<div>
			<label for='title'>Title</label>
		</div>
		<div>
			<input id='title' name='title' type="text" value="{{{ Input::old('title') }}}">
		</div>
		<div>
			<label for='content'>Content</label>
		</div>
		<div>
			<input id='content' name='content' type="text" value="{{{ Input::old('content') }}}">
		</div>
		<div>
			<button>Submit</button>
		</div>
	</form>
</div>

@stop
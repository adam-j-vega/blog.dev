@extends('layouts.postsTemplate')

@section('content')

<h1>{{{$post->title}}}</h1>
<p>{{{$post->content}}}</p>
<form method='POST' action="{{{ action('PostsController@store') }}}">
	<div>
		<button><a href="{{{ action('PostsController@create', $post->id) }}}">Edit</a></button>
	</div>
</form>

@stop
@extends('layouts.postsTemplate')

@foreach($posts as $post)
		<h1><a href="{{{ action('PostsController@show', $post->id) }}}">"{{{$post->title}}}"</a></h1>
		<p>{{{$post->content}}}</p>
		<br>
@endforeach
<button><a href="{{{ action('PostsController@create') }}}">Add New Post</a></button>
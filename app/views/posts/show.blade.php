@extends('layouts.posts_template')

@section('content')

<h1>{{{$post->title}}}</h1>
<p>{{{$post->content}}}</p>
<small>{{{$post->created_at->format(Post::DATE_FORMAT)}}}</small>
<br>
<div>
	<a href="{{{ action('PostsController@edit', $post->id) }}}">Edit</a>
</div>
<br>
<div>
	<a href="{{{ action('PostsController@index') }}}">Index</a>
</div>


@stop
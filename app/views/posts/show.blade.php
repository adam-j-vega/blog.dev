@extends('layouts.postsTemplate')

@section('content')

<h1>{{{$post->title}}}</h1>
<p>{{{$post->content}}}</p>

<div>
	<button><a href="{{{ action('PostsController@edit', $post->id) }}}">Edit</a></button>
</div>

<div>
	<button><a href="{{{ action('PostsController@index') }}}">Index</a></button>
</div>

@stop
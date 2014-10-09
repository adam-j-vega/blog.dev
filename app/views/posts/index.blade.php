@extends('layouts.postsTemplate')

@section('content')

@foreach($posts as $post)
		<h1><a href="{{{ action('PostsController@show', $post->id) }}}">{{{$post->title}}}</a></h1>
		<small>{{{$post->created_at->format(Post::DATE_FORMAT)}}}</small>
		<p>{{{$post->content}}}</p>
		<br>

@endforeach

{{ $posts->links() }}
<br>
<button>
	<a href="{{{ action('PostsController@create') }}}">Add New Post</a>
</button>

@stop
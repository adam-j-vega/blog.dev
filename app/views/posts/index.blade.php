@extends('layouts.posts_template')

@section('content')
<div>
	{{ Form::open(array('action' => 'PostsController@index', 'method' => 'get')) }}
	
	<div>
		{{ Form::label('Search', 'search') }}
	</div>
	<div>
		{{ Form::text('search', Input::get('search')) }}
	</div>

	<div>
		<button>Submit</button>
	</div>

	{{ Form::close()}}
</div>


@foreach($posts as $post)
	<h1><a href="{{{ action('PostsController@show', $post->id) }}}">{{{$post->title}}}</a></h1>
	<small>Created on {{{$post->created_at->format(Post::DATE_FORMAT)}}}</small>
	<br>
	<small>Updated on {{{$post->updated_at->format(Post::DATE_FORMAT)}}}</small>
	<br>
	@if ($post->image_name)
	<img src="{{{ $post->image_name }}}" class="img-thumbnail">
	@endif
	<small>by {{ $post->user->email }}</small>
	<p>{{{$post->content}}}</p>

	<br>

@endforeach

{{ $posts->links() }}
<br>
<button>
	<a href="{{{ action('PostsController@create') }}}">Add New Post</a>
</button>

@stop
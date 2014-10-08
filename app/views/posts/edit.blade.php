@extends('layouts.postsTemplate')

@section('content')

<div>
	{{ Form::model($post, array('action' => 'PostsController@update', $post->id, 'class' => 'form-horizontal', 'method' => 'form-horizontal')) }}
		@include('posts.form')
		<div>
			<button>Edit</button>
		</div>
	{{ Form::close()}}
</div>

@stop
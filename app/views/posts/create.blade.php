@extends('layouts.posts_template')

@section('content')

	<div>
		{{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal' )) }}
		
			@include('posts.form')

			<div>
				<button>Submit</button>
			</div>

		{{ Form::close()}}
	</div>
@stop
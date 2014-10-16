@extends('layouts.posts_template')

@section('content')

	<div>
		{{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal', 'files' => 'true')) }}
		
			@include('posts.form')

			<div>
				{{Form::submit('Submit')}}
			</div>

		{{ Form::close()}}
	</div>
@stop
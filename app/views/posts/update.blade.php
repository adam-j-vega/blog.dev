@extends('layouts.posts_template')

@section('content')

<div>
	{{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal')) }}
	<!-- This code is kept to show the alternate syntax between Laravel and Html --> 
	<!-- <form method='POST' action="{{{ action('PostsController@store') }}}"> -->
		<div>
			{{ Form::label('title', 'Title') }}
			<label for='title'>Title</label>
		</div>
		<div>
			{{ Form::text('title', Input::old('title')) }}
			<!-- This code is kept to show the alternate syntax between Laravel and Html -->
			<!-- <input id='title' name='title' type="text" value="{{{ Input::old('title') }}}"> -->
			{{$errors->first('title', '<span class="help-block">:message</span>')}}
		</div>

		<div>
			{{ Form::label('content', 'Content') }}
			<label for='content'>Content</label>
		</div>
		<div>
			{{ Form::text('content', Input::old('content')) }}
			<!-- This code is kept to show the alternate syntax between Laravel and Html -->
			<!-- <input id='content' name='content' type="text" value="{{{ Input::old('content') }}}"> -->
			{{$errors->first('content', '<span class="help-block">:message</span>')}}
		</div>
		<div>
			<button>Submit</button>
		</div>
	{{ Form::close()}}
	<!-- This code is kept to show the alternate syntax between Laravel and Html -->
<!-- 	</form> -->
</div>
@stop
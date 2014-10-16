@extends('layouts.posts_template')

@section('content')

<div>
	{{ Form::open(['method' => 'POST', 'action' => 'HomeController@doLogin'])}}
	<div>
		{{ Form::label('email', 'Email') }}
	</div>
	<div>
		{{ Form::text('email', Input::old('email')) }}
		{{$errors->first('email', '<span class="help-block">:message</span>')}}
	</div>
	<div>
		{{ Form::label('password', 'Password') }}
	</div>
	<div>
		{{ Form::password('password') }}
		{{$errors->first('password', '<span class="help-block">:message</span>')}}
	</div>
	<div>
		<button>Submit</button>
	</div>
	{{ Form::close()}}
</div>

@stop
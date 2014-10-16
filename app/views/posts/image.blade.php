@extends('layouts.posts_template')

@section('content')

	<div>
	  {{--this opens the form for opening a file--}}

	  {{ Form::open(array('url'=>'form-submit','files'=>true)) }}

	  {{ Form::label('file','File')) }}
	  {{ Form::file('file') }}
	  <br/>
	  <!-- submit buttons -->
	  {{ Form::submit('Save') }}
	  
	  <!-- reset buttons -->
	  {{ Form::reset('Reset') }}
	  
	  {{ Form::close() }}
	</div>
@stop
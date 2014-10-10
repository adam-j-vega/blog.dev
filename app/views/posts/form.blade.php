<div>
	{{ Form::label('title', 'Title') }}
</div>
<div>
	{{ Form::text('title', Input::old('title')) }}
	{{$errors->first('title', '<span class="help-block">:message</span>')}}
</div>
<div>
	{{ Form::label('content', 'Content') }}
</div>
<div>
	{{ Form::textarea('content', Input::old('content')) }}
	{{$errors->first('content', '<span class="help-block">:message</span>')}}
</div>
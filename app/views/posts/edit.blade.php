@extends('layouts.postsTemplate')

@section('content')

<div>
	{{ Form::model($post, array('action' => ['PostsController@update', $post->id], 'class' => 'form-horizontal', 'method' => 'PUT' )) }}
		@include('posts.form')
		<div>
			<button>Edit</button>
		</div>
	{{ Form::close()}}
</div>
<div>
	{{ Form::open(['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id]])}}
		<div>
			<button>Delete</button>
		</div>
	{{ Form::close()}}
</div>
<br>
<div>
	<a href="{{{ action('PostsController@index') }}}">Index</a>
</div>
@stop

<script>
	if ("#delete-form").submit(function(event) {
		if(!confirm('Are you sure you want to delete this post?')){
			event.preventdefault();			
		}
	}

</script>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	@yield('top-script')
</head>
<body>

	@if (Session::has('successMessage'))
    	<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
    	<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif
	@if (Session::has('warningMessage'))
    	<div class="alert alert-danger">{{{ Session::get('warningMessage') }}}</div>
	@endif
	@if (Session::has('infoMessage'))
    	<div class="alert alert-danger">{{{ Session::get('infoMessage') }}}</div>
	@endif
	@yield('content')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
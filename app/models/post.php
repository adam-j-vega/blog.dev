<?php
use Carbon\Carbon;
class Post extends BaseModel
{
	const DATE_FORMAT = 'l F jS Y @ g:i a';
	public static $rules = array(
		'title' => 'required|max:255',
		'content' => 'required'
	);
	protected $table = 'posts';
}

?>
<?php

class Post extends Eloquent
{
    protected $table = 'posts';

    protected $fillable = array('title', 'body', 'image');

    // Add your validation rules here
	public static $rules = array(
	    'title' => 'min:2|max:100',
	    'body'  => 'min:2|max:10000',
	    'image' => 'required|image'
	);

	// public function user()
	// {
	//     return $this->belongsTo('User');
	// }
}
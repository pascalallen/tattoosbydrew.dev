<?php

class Post extends Eloquent
{
    protected $table = 'posts';

    // Add your validation rules here
	public static $rules = array(
	    'title' => 'min:2|max:100',
	    'body'  => 'min:2|max:10000',
	    'image' => 'required|image'
	);
}
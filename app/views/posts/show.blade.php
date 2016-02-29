@extends('layouts.master')

@section('top-script')

@stop

@section('content')

	{{ Form::open(array('action' => array('PostsController@destroy', $post->id, 'files' => true), 'method' => 'DELETE')) }}
	
		<a href="{{{ action('PostsController@edit', $post->id) }}}" class="btn btn-info">Edit Post</a>

		<button class="btn btn-danger">Delete</button>

	{{ Form::close() }}

	<h1>{{{ $post->title }}}</h1>
	<p>{{{ $post->body }}}</p>
	<img src="{{{ $post->image }}}" class="post-image">

@stop

@section('bottom-script')

@stop
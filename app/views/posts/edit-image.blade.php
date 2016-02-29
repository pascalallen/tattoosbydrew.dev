@extends('layouts.master')

@section('top-script')

@stop

@section('content')

	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}

		<div class="form-group {{ ($errors->has('image')) ? 'has-error' : '' }}">
			{{ $errors->first('image', '<div class="alert alert-danger">:message</div>') }}
			{{ Form::label('image', 'Image') }}
			<input type="file" id="image" name="image">
		</div>

		<button type="submit" class="btn btn-default">Submit</button>
		
	{{ Form::close() }}

@stop

@section('bottom-script')

@stop
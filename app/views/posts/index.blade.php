@extends('layouts.master')

@section('top-script')

@stop

@section('content')

	@foreach($images as $image)
		<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
				{{ "<img src='" . $image . "' class='image'>" }}
			</div>
		</div>
	@endforeach

	{{ $images->links() }}

@stop

@section('bottom-script')

@stop
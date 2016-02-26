@extends('layouts.master')

<?php
	$dir = "img/*.JPG";
	$images = glob($dir);
	$perPage = 8;
	$currentPage = Input::get('page') - 1;
	$pagedData = array_slice($images, $currentPage * $perPage, $perPage);
	$images = Paginator::make($pagedData, count($images), $perPage);
?>

@section('top-script')

<style type="text/css">

	.image{
		float: none;
	}

	.portfolio-container {
		padding-top: 100px;
	}

</style>

@stop

@section('content')

	<div class="portfolio-container">
		<div class="row">

			@foreach($images as $image)
				<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
						{{ "<img src='" . $image . "' class='image'>" }}
					</div>
				</div>
			@endforeach

		</div>
	</div>

	{{ $images->links() }}

@stop

@section('bottom-script')

@stop
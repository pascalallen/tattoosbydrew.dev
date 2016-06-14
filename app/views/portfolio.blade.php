@extends('layouts.master')

<?php
	//store directory to variable
	$dir = "img/*.JPG";

	//returns array matching $dir
	$images = glob($dir);

	//store how many images to show per page to variable
	$perPage = 8;

	//sets current page
	$currentPage = Input::has('page') ? Input::get('page') - 1 : 1;

	//returns the sequence of elements from the array as specified by the offset and length parameters
	$pagedData = array_slice($images, $currentPage * $perPage, $perPage);

	//create a pagination instance, pass an array of items($pagedData), total number of items(count($images)), and how many per page to display($perPage)
	$images = Paginator::make($pagedData, count($images), $perPage);
?>

@section('top-script')

<style type="text/css">

	.image{
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
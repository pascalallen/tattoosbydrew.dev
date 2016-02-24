<?php
	$dir = "img/*.JPG";
	$images = glob($dir);
?>

	@foreach($images as $image)
		{{ "<img src='" . $image . "'>" }}
	@endforeach
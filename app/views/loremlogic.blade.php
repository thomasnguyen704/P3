@extends('lorem')


@section('title')
	Lorem Ipsum Generator
@stop


@section('logic')
	<div class="panel panel-default">
		<div class="panel-body">
			<?php
				$generator = new Badcow\LoremIpsum\Generator();
				$paragraphs = $generator->getParagraphs($_POST["paragraphs"]);
				echo implode("</p><p>", $paragraphs);
			?>
		</div>
	</div>
@stop


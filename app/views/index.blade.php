@extends('_master')

@section('title')
	Developer's Best Friend
@stop

@section('jumbo')
	Project 3
@stop

@section('content')
	<div class="row">
		<div class="col-md-6">
			<a href="/lorem"><h3> Lorem Ipsum Generator </h3></a>
			<p> In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content that could be distracting with placeholder text may allow viewers to focus on graphic aspects such as font, typography, and page layout. <a href="http://en.wikipedia.org/wiki/Lorem_ipsum">http://en.wikipedia.org/wiki/Lorem_ipsum</a> </p>
		</div>

		<div class="col-md-6">
			<a href="/users"><h3> Random User Generator </h3></a>
			<p> Create random user data for your random use(s). </p>
		</div>
	</div>
@stop
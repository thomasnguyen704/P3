@extends('_master')


@section('title')
	Lorem Ipsum Generator
@stop


@section('jumbo')
	Lorem Ipsum Generator
@stop


@section('content')
	<p> How many paragraphs do you want? (Enter a value from 1 to 99)</p>

	<form method='POST'>
		<label for="paragraphs"> Paragraphs</label> <input type="number" name="paragraphs" id="paragraphs"  min="1" max="99" value="1">
		<input type="submit" class="btn-xs btn-primary" value="Submit">    
    </form>
@stop
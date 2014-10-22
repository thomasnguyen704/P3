@extends('_master')


@section('title')
	Random User Generator
@stop

@section('jumbo')
	Random User Generator
@stop


@section('content')
	<form method='POST'>
		<div class="form-group">
			<label for="users"> How many users? (Max: 9)</label> 
			<input type="number" name="users" id="users"  min="1" max="9" value="1">
		</div>

		<div class="form-group">
			<strong>Additional Options:</strong>
			
			<div class="checkbox">
				<label for="address"> 
					<input name="address" type="checkbox">
					Address
				</label> 
			</div>

			<div class="checkbox">
				<label for="email"> 
					<input name="email" type="checkbox">
					Email
				</label>
			</div>
		</div>

		<input type="submit" class="btn btn-primary" value="Submit">
	</form>
@stop


@extends('users')


@section('title')
	Random Users Generator	
@stop


@section('logic')
	<div class="panel panel-default">
		<div class="panel-body">
			<?php
				$faker = Faker\Factory::create();

				for ($i=0; $i < $_POST["users"]; $i++) {
					echo $faker->name, "<br>";

					if(isset($_POST['address']))
						echo $faker->address, "<br>";

					if ( isset($_POST['email']) )
						echo $faker->email, "<br>";

					echo "<br>";
				};
			?>
		</div>
	</div>
@stop
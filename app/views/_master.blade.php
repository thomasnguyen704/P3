<!doctype html>

<html>


<head>
	<meta charset="UTF-8">
	<title> Thomas Nguyen | @yield('title') </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">

		<div class="page-header">
			<ul class="nav nav-pills pull-right">
				<li><a href="/">Home</a></li>
			</ul>
			<h3 class="text-muted">Developer's Best Friend</h3>
		</div>

		<br>

		<div class="jumbotron">
			<h1> @yield('jumbo') </h1>
		</div>

		@yield('content')

		<br>
	
		@yield('logic')

	</div><!--container-->

	<div class="footer">
		<br><br>
	</div>

</body>


</html>
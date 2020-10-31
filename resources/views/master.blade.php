<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">	
	</head>
	<body>
		@include('header')
		@yield('content')
		@include('footer')
		<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script> -->
	</body>
</html>

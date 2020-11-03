<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
		<!-- bootstrap css v4.5.3-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">	
		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
		<!-- stylesheets -->
		<link rel="stylesheet" href="source/assets/dest/animate.css">
		<link rel="stylesheet" href="source/assets/dest/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="source/assets/dest/owlcarousel.css">
		<link rel="stylesheet" href="source/assets/dest/style.css">

		<link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body>
		@include('header')
		@yield('content')
		@include('footer')
		<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script> -->
	</body>
</html>

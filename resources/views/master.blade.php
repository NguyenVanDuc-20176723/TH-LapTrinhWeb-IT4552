<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="source/assets/favicon.ico">

    <link rel="stylesheet" type="text/css" href="source/assets/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="./css/style2.css"> -->
 	<link rel="stylesheet" type="text/css" href="source/assets/css/color/color.css">
 	<link rel="stylesheet" href="source/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="source/assets/css/owl.transitions.css">

 	<!-- ioncion
 		======================== -->
 		<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">

 	<!-- fontawsome
 		========================= -->
 		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <!-- boostrap
    	============================ -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    @include('header')
    @yield('content')
    @include('footer')
    <!-- JAVASCRIPT
    	=================================== -->

    	<!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="source/assets/js/plugins.js"></script>	
	<script src="source/assets/js/custom.js"></script> 
</body>
</html>
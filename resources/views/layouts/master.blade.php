<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

	<base href="{{asset('')}}">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="source/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="source/css/animate.css">

	<link rel="stylesheet" href="source/css/owl.carousel.min.css">
	<link rel="stylesheet" href="source/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="source/css/magnific-popup.css">

	<link rel="stylesheet" href="source/css/aos.css">

	<link rel="stylesheet" href="source/css/ionicons.min.css">

	<link rel="stylesheet" href="source/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="source/css/jquery.timepicker.css">


	<link rel="stylesheet" href="source/css/flaticon.css">
	<link rel="stylesheet" href="source/css/icomoon.css">
	<link rel="stylesheet" href="source/css/style.css">
</head>

<body class="goto-here">

	@include('layouts.header')
	@yield('content')
	@include('layouts.footer')
	@include('layouts.loader')

	<script src="source/js/jquery.min.js"></script>
	<script src="source/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="source/js/popper.min.js"></script>
	<script src="source/js/bootstrap.min.js"></script>
	<script src="source/js/jquery.easing.1.3.js"></script>
	<script src="source/js/jquery.waypoints.min.js"></script>
	<script src="source/js/jquery.stellar.min.js"></script>
	<script src="source/js/owl.carousel.min.js"></script>
	<script src="source/js/jquery.magnific-popup.min.js"></script>
	<script src="source/js/aos.js"></script>
	<script src="source/js/jquery.animateNumber.min.js"></script>
	<script src="source/js/bootstrap-datepicker.js"></script>
	<script src="source/js/scrollax.min.js"></script>
	<script src="source/js/main.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
	<title>@yield('title', 'Sample') - INSTANT</title>
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('static/home/css/app.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<!-- Static navbar -->
	@include('layouts.home._header')

	<!-- Content -->
	@yield('content')

	<!-- Social -->
	@include('layouts.home._footer')

	<!-- Bootstrap core JavaScript -->
	<script src="{{ asset('static/home/js/app.js') }}"></script>
</body>
</html>

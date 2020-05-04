<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=devices-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<title>@yield('title')</title>
	</head>
	<body>
		@include('layouts.nav')
		@yield('content')

		<script type="text/javascript" src="/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
	</body>
</html>
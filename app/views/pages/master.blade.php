<html>
	<head>
		<meta charset="UTF-8">
		<title>Chao Lai // Computer Science // UCONN // Senior</title>
		{{HTML::style('css/style.css')}}
	</head>
	<body>
		<div id="container">
		@include('components.header')
		@yield('content')
		@include('components.footer')
		</div>
	</body>
</html>

<html>
	<head>
		@yield('title')
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		@yield('meta')
		@include('layouts._style')
		@include('layouts._scripts_top')
	</head>
	<body style="background-color: #FFF; margin-top:0px; margin-left:0; margin-right:0;">
		@include('layouts._header')
		@yield('content')
		@include('layouts._footer')
		@include('layouts._scripts')
	</body>
</html>

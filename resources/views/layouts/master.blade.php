<html>
	<head>
		@yield('title')
		<meta charset="utf-8">
		@yield('meta')
		@include('layouts._style')
		@include('layouts._scripts_top')
	</head>
	<body style="background-color: #F6F6F6;">
		@include('layouts._header')
		<div class="main-content">
			@yield('content')
		</div>
		@include('layouts._footer')
		@include('layouts._scripts')
	</body>
</html>

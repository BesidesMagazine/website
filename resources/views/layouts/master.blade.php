<html>
	<head>
		@yield('title')
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		@yield('meta')
		@include('layouts._style')
		@include('layouts._scripts_top')
	</head>
	<body style="background-color: #F6F6F6; margin-top:0px; margin-left:0; margin-right:0;">
		@include('layouts._header')
		<div class="main-content">
			@yield('content')
		</div>
		@include('layouts._footer')
		@include('layouts._scripts')
		@include('forum.forumad')
	</body>
</html>

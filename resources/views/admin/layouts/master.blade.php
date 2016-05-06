<html>
<head>
    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
    <header>
    	<nav class="navbar navbar-default">
  			<div class="container-fluid">
	    		<div class="navbar-header">
	      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        		<span class="sr-only">Toggle navigation</span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	      			</button>
	      			<a class="navbar-brand" href="{{ route('admin') }}">Besides</a>
	    		</div>

	    	@if ( Auth::check() )
	        	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        		<ul class="nav navbar-nav">
	                <li><a href="{{ route('article.index') }}">文章</a></li>
	                <li><a href="{{ route('category.index') }}">文章分類</a></li>
                    <li><a href="{{ route('author.index') }}">作者</a></li>
                    <li><a href="{{ route('partner.index') }}">夥伴</a></li>
                    <li><a href="{{ route('partnercategory.index') }}">夥伴分類</a></li>
	            	</ul>
	            	<ul class="nav navbar-nav navbar-right">
	                	<li><a>你好, {{ Auth::user()->name }}</a></li>
	                	<li><a href="{{ route('logout') }}">登出</a></li>
	            	</ul>
                    <ul class="nav navbar-nav navbar-right">
	                <li><a href="{{ route('register') }}">Register</a></li>
	            	</ul>
	        	</div>
                

	    	@endif
  			</div>
		</nav>
	</header>

    <div class="container">
    	@include('admin.errors.message')
        @yield('content')
    </div>
</body>

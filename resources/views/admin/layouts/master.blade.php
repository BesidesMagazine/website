<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body style="padding-top:70px;">
    <header>
    	<nav class="navbar navbar-default navbar-fixed-top">
  			<div class="container-fluid">
	    		<div class="navbar-header">
	      			<a href="{{ route('admin') }}">
                        <img style="height:50px;padding:5px;margin-right:10px;" style="height:auto;" src="/img/translogo.png">
                    </a>
	    		</div>

        		<ul class="nav navbar-nav">
                <li><a href="{{ route('article.index') }}">文章</a></li>
                <li><a href="{{ route('category.index') }}">文章分類</a></li>
                <li><a href="{{ route('author.index') }}">作者</a></li>
                <li><a href="{{ route('partner.index') }}">夥伴</a></li>
                <li><a href="{{ route('partnercategory.index') }}">夥伴分類</a></li>
            	</ul>
            	<ul class="nav navbar-nav navbar-right" style="margin-right:5px;">
                	<a class="btn btn-default navbar-btn" href="{{ route('logout') }}">登出</a>
            	</ul>
  			</div>
		</nav>
	</header>

    <div class="container">
    	@include('admin.errors.message')
        @yield('content')
    </div>
</body>

<!DOCTYPE html>
<html>
@include('admin.layouts._head')
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
                <li class="{{ Request::is('article')? 'active': ''  }}"><a href="{{ route('article.index') }}">文章</a></li>
                <li class="{{ Request::is('category')? 'active': ''  }}"><a href="{{ route('category.index') }}">文章分類</a></li>
                <li class="{{ Request::is('author')? 'active': ''  }}"><a href="{{ route('author.index') }}">作者</a></li>
                <li class="{{ Request::is('partner')? 'active': ''  }}"><a href="{{ route('partner.index') }}">夥伴</a></li>
                <li class="{{ Request::is('partnercategory')? 'active': ''  }}"><a href="{{ route('partnercategory.index') }}">夥伴分類</a></li>
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
    <script type="text/javascript" src="/js/main.js">

    </script>
</body>

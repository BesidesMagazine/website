@extends('layouts.master')

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/hot.css">
	<link rel="stylesheet" type="text/css" href="/css/article.css">

@endsection

@section('meta')
    <meta property="og:url"           content="{{ env('APP_URL') .'/'. $article->category_name . '/' . $article->title}}" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="{{$article->title}}|《除了》雜誌" />
	<meta property="og:description"   content="{{$article->preview_content}}" />
	<meta property="og:image"         content="{{$article->preview_image}}" />
@endsection

@section('content')
    <div class="content-container" style="width:1000px;padding-top:50px;">
		<div class="front_img">
		</div>
        <div class="article">
            <span class="article-title">
    			{{$article->title}}
    		</span>
            <br>
    		{{-- <div class="article-fb">
    			<div style="" class="fb-like" data-href="{{ env('APP_URL') .'/'. $article->category_name . '/' . $article->title}}" data-width="300px" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
    		</div>
    		<div class="article-info">
    			作者： <a href="{{route('author.show',[ 'author' => $article->author_name])}}" style="color: #666666;">{{$article->author_name }}</a>_ {{$article->created_at}}
    		</div> --}}
    		{{-- <hr class="separator"> --}}
            <div class="article-content">
                {!! $article->content !!}

            </div>
            {{-- <hr class="separator">
            <dir class="fb-comments">
                <div class="fb-comments" data-href="{{ env('APP_URL') .'/'. $article->category_name . '/' . $article->title}}" data-width="900" data-numposts="5"></div>
            </dir> --}}
        </div>

		<div class="sidebar">
			<div class="author_info">
				<div class="right_top_shade">
				</div>
				<div class="left_bot_box">
					<span>{{$article->author->name}}</span>
					<p>{{$article->author->introduction}}</p>
				</div>
				<div class="author_pic" style="background-image: url('{{$article->author->image_url}}');"></div>
			</div>
			<div class="more_menu">
				<div class="recommand">
					<h2><i class="fa fa-bars" aria-hidden="true"></i>&nbsp;最新推薦</h2>
					<ul>
						@foreach ($hotArticles as $article)
							<li onclick="location.href='{{ route('article.show',['title' => $article->title])}}'">
								<span>{{$article->first()->created_at->format('M.j')}}</span>&nbsp;&nbsp;
								<p>{{$article->title}}</p>
							</li>
						@endforeach
					</ul>
				</div>
				<div class="categories_list">
					<h2><i class="fa fa-bars" aria-hidden="true"></i>&nbsp;類別</h2>
					<ul>
						@foreach ($categories as $category)
	                        <li onclick="location.href='{{ route('category.show', ['category' => $category->name])}}'">
								<p>{{$category->name}}<span></span></p>
							</li>
	                    @endforeach
					</ul>
				</div>
				<div class="years_list">
					<h2><i class="fa fa-bars" aria-hidden="true"></i>&nbsp;年份</h2>
					<ul>
						@foreach ($years as $year)
	                        <li onclick="location.href='{{ route('article.year', ['year' => $year])}}'">
								<p>{{$year}}<span></span></p>
							</li>
	                    @endforeach
					</ul>
				</div>
			</div>
		</div>

    </div>
@endsection

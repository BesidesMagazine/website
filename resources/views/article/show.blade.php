@extends('layouts.master')

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/hot.css">
	<link rel="stylesheet" type="text/css" href="/css/article.css">

@endsection

@section('meta')
    <meta property="og:url"           content="{{ env('APP_URL') .'/'. $article->category_name . '/' . $article->title}}" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="{{$article->title}}" />
	<meta property="og:description"   content="{{$article->preview}}" />
	<meta property="og:image"         content="{{$article->previewimg}}" />
@endsection

@section('content')

	@include('partials._hot')
	<dir class="article-content">

		<h1 class="article-title">
			{{$article->title}}
		</h1>
		<div class="article-fb">
			<div style="" class="fb-like" data-href="{{ env('APP_URL') .'/'. $article->category_name . '/' . $article->title}}" data-width="300px" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
		</div>
		<div class="article-info">
			作者: <a href="{{route('author',[ 'author' => $article->author_name])}}" style="color: #666666;">{{$article->author_name }}</a>_ {{$article->created_at}}
		</div>
		<hr>
		{!! $article->content !!}

		<dir class="fb-comments">
			<div class="fb-comments" data-href="{{ env('APP_URL') .'/'. $article->category_name . '/' . $article->title}}" data-width="750" data-numposts="5"></div>
		</dir>
	</dir>
@endsection

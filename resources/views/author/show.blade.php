@extends('layouts.master')

@section('content')
	<div style="height:50px;"></div>
	<dir style="text-align:left;">
		<div class="author-title" style="background-image: url('{{$author->imgurl}}');height:320px;width:320px;
	    background-position: center;
	    background-size: cover;display: inline-block;">
		</div>
		<div style="margin-left:60px;height:320px;display: inline-block;vertical-align:top;max-width:500px">
			<h1 style="display: inline-block;letter-spacing: 0.2em;">{{$author->name}}</h1>
			<hr>
			<p style="display: inline-block;">{{$author->introduction}}</p>
		</div>
	</dir>

	<hr class="separator" style="width: 95%;margin-bottom:20px;">
	@foreach ($articles as $article)
      @include('partials._card')
    @endforeach
@endsection

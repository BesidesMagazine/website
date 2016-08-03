@extends('layouts.master')

@section('content')
    <div class="content-container" style="margin-top:50px;">
    	<dir style="text-align:left;">
    		<div class="card" style="background-image: url('{{$author->image_url}}');height:320px;width:320px;
    	    background-$main-content-widthion: center;
    	    background-size: cover;display: inline-block;">
    		</div>
    		<div class="card"  style="margin-left:60px;height:320px;display: inline-block;vertical-align:top;max-width:500px">
    			<span class="article-title" >{{$author->name}}</span>
    			<hr class="separator">
    			<p style="display: inline-block;">{{$author->introduction}}</p>
    		</div>
    	</dir>

    	<hr class="separator" style="width: 95%;margin-bottom:20px;">
    	@foreach ($articles as $article)
          @include('partials._card')
        @endforeach
    </div>

@endsection

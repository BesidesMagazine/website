@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="/css/category-cards-wall.css">
    <link rel="stylesheet" type="text/css" href="/css/hot.css">
@endsection

@section('content')
    <div style="text-align: center;">
        @include('partials._hot')
        <dir class="category-cards-wall">
            <h1>{{ $category }}</h1>
            <br>
            <br>
    		@foreach ($articles as $article)
    			@include('partials._card')
    	    @endforeach
    	</dir>

    </div>

@endsection

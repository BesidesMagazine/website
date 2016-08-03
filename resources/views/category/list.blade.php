@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="/css/category-cards-wall.css">
    <link rel="stylesheet" type="text/css" href="/css/hot.css">
@endsection

@section('content')
    <div class="content-container">
        <div class="category-container">
            <span class="category-title">{{ $category }}</span>
            <hr class="separator-active">
    		@foreach ($articles as $article)
    			@include('partials._card')
    	    @endforeach
        </div>

    </div>


@endsection

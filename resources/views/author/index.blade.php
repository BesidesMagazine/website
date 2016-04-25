@extends('layouts.master')

@section('style')
    <link href="/css/author.css" rel="stylesheet">
@endsection

@section('scripts_top')
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/v1.0.20/dist/jquery.flip.min.js"></script>
@endsection

@section('content')

    <h1>作者列表</h1>
    <hr>
    @foreach($authors as $author)
        @include('author._author_card')
    @endforeach

@endsection

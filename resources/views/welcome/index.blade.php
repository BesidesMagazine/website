@extends('layouts.master')

@section('meta')
    <meta property="og:url"           content="{{env('APP_URL')}}" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="《除了》雜誌" />
	<meta property="og:description"   content="《除了》雜誌為中央大學學生創辦之獨立刊物，宗旨為推動校園的人文氛圍及文藝復興，透過對文化與公共議題之關注，結合專題企劃與評論，建立校園發聲之重要平台。" />
	<meta property="og:image"         content="/img/metapic.jpg" />
@endsection

@section('content')
  <br><br><div class="front_img"></div>
    {{-- @include('welcome._slide') --}}
    <!-- @include('welcome._announcement_slide') -->
    <div class="article-wall">
        @include('welcome._new_articles')
        {{-- @foreach($categories as $category)
            @include('welcome._all_cards_wall')
        @endforeach --}}
    </div>
    <br>

    @include('author._author_list')
@endsection

@section('scripts')
    <script src="/js/slide.js"></script>
    <script src="/js/effect.js"></script>
@endsection

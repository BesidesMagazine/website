@extends('layouts.master')

@section('style')
    <link href="/css/author.css" rel="stylesheet">
@endsection

@section('scripts_top')
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/v1.0.20/dist/jquery.flip.min.js"></script>
@endsection

@section('content')
    <div class="content-container">
        <span class="author-title">關於除了</span>
        <hr class="separator">
        <center><img src="/img/about.jpg" width="50%">
          <h4>《除了》雜誌為中央大學學生創辦之獨立刊物</h4>
          <h4>宗旨為推動校園的人文氛圍及文藝復興</h4>
          <h4>透過對文化與公共議題之關注</h4>
          <h4>結合專題企劃與評論</h4>
          <h4>建立校園發聲之重要平台</h4><h4>。</h4>
        </center>

    </div>
    <script>
        $(".card-author").flip();
    </script>
@endsection

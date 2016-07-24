@extends('admin.layouts.master')

@section('content')
  <script src="/ckeditor/ckeditor.js"></script>
  <h1>{{$article->title}}</h1>
  <hr>
  <form id="form" action="{{ route('article.update', ['id' => $article->id]) }}" method="post" >
    <h2>分類</h2>
    <select form="form" name="category">
      @foreach ($categories as $category)
        @if ($category->name == $article->category_name)
          <option selected="selected">{{$category->name}}</option>
        @endif
        <option>{{$category->name}}</option>
      @endforeach
    </select>
    <h2>作者</h2>
    <select form="form" name="author">
      @foreach ($authors as $author)
        @if ($author->name == $article->author_name)
          <option selected="selected">{{$author->name}}</option>
        @else
            <option>{{$author->name}}</option>
        @endif

      @endforeach
    </select>
    <h2>標題</h2>
    <input type="text" class="form-control" name="title" value="{{$article->title}}" >
    <h2>預覽</h2>
    <input type="text" class="form-control" name="preview_content" value="{{$article->preview_content}}">
    <h2>預覽圖</h2>
    <input type="text" class="form-control" name="preview_image" value="{{$article->preview_image}}" >
    <hr>

    <textarea class="ckeditor" name="content" id="editor" >{{$article->content}}</textarea>
    <hr>
    <input type="submit" value="更新" class="form-control" >
    <input type="hidden" name="_method" value="put" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>
  <script>CKEDITOR.replace( 'editor' );</script>
@endsection

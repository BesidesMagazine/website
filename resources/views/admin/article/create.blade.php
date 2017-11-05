@extends('admin.layouts.master')

@section('content')
  <script src="/ckeditor/ckeditor.js"></script>
  <h1>新增文章</h1>
  <hr>
  <form id="form"  action="{{route('adminmg.article.store')}}" method="post" >
    <h2>分類</h2>
    <select class="form-control" name="category">
      @each('admin.article._select_category', $categories, 'category')
    </select>
    <h2>作者</h2>
    <select class="form-control" form="form" name="author">
      @each('admin.article._select_author', $authors, 'author')
    </select>
    <h2>標題</h2>
    <input type="text" class="form-control" name="title" >
    <h2>預覽</h2>
    <input type="text" class="form-control" name="preview_content" >
    <h2>預覽圖</h2>
    <input type="text" class="form-control" name="preview_image" >
    <hr>
    <textarea class="ckeditor" name="content" id="editor" ></textarea>
    <hr>
    <input type="submit" value="新增" class="form-control" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>
  <script>CKEDITOR.replace( 'editor' );</script>
@endsection

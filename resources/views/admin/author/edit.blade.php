@extends('admin.layouts.master')

@section('content')

  <h1>{{$author->name}}</h1>
  <hr>
  <form  action="{{ route('author.update', ['id' => $author->id]) }}" method="post" >
    <h2>作者姓名</h2>
    <input type="text" class="form-control" name="name" value="{{$author->name}}">
    <h2>作者照片</h2>
    <input type="text" class="form-control" name="image_url" value="{{$author->image_url}}">
    <hr>
    <h2>作者介紹</h2>
    <textarea class="form-control" name="introduction"  id="editor"  >{{$author->introduction}}</textarea>
    <hr>
    <input type="submit" value="更新" class="form-control" >
    <input type="hidden" name="_method" value="put" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>

@endsection

@extends('admin.layouts.master')

@section('content')

  <h1>新增作者</h1>
  <hr>
  <form  action="{{route('adminmg.author.store')}}" method="post" >
    </select>
    <h2>作者姓名</h2>
    <input type="text" class="form-control" name="name" >
    <h2>作者照片</h2>
    <input type="text" class="form-control" name="image_url" >
    <hr>
    <h2>作者介紹</h2>
    <textarea class="form-control" name="introduction" id="editor" ></textarea>
    <hr>
    <input type="submit" value="新增" class="form-control" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>

@endsection

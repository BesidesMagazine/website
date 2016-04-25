@extends('admin.layouts.master')

@section('content')

  <h1>新增夥伴</h1>
  <hr>
   <form action="{{route('partner.store')}}" method="post">

    <h2>名字</h2>
    <input type="text" class="form-control" name="name" >
    <h2>介紹</h2>
    <textarea class="form-control" name="introduction" ></textarea>
    <h2>logo url</h2>
    <input type="text" class="form-control" name="logourl" >
    <h2>連結</h2>
    <input type="text" class="form-control" name="connect" >
    <hr>
    <input type="submit" value="新增" class="btn btn-success" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

  </form>

@endsection

@extends('admin.layouts.master')

@section('content')

    <h1>新增夥伴</h1>
    <hr>
    <form action="{{route('partner.update',['partner' => $partner->id])}}" method="post">

        <h2>名字</h2>
        <input type="text" class="form-control" name="name" value="{{$partner->name}}" >
        <h2>介紹</h2>
        <textarea class="form-control" name="introduction"  >{{$partner->introduction}}</textarea>
        <h2>logo url</h2>
        <input type="text" class="form-control" name="logourl" value="{{$partner->logourl}}" ></input>
        <h2>連結</h2>
        <input type="text" class="form-control" name="connect" value="{{$partner->connect}}" ></input>
        <hr>
        <input type="submit" value="更新" class="btn btn-success" >
        <input type="hidden" name="_method" value="put" />
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </form>

@endsection

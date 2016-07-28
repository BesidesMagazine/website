@extends('admin.layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-offset-11 col-md-1">
            <a class="btn btn-lg btn-default"  href="{{ route('author.create') }}">新增作者</a>
        </div>
    </div>

    <dir class="row">
        <div class="col-md-offset-3 col-md-6">


        @foreach ($authors as $author)
        <a style="text-decoration:none;color:black" href="{{route('author.edit', ['id' => $author->id])}}" >
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-5">
                        <div style="border-radius:50%;background-size: cover;background-position: center;background-image:url({{$author->image_url}});height:150px;width:150px;">

                        </div>
                    </div>
                    <div class="col-md-7">
                        <h1>{{$author->name}}</h1>
                    </div>

                </div>
            </div>
        </a>
        @endforeach
        </div>
    </dir>
@endsection

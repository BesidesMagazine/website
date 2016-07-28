@extends('admin.layouts.master')

@section('content')

<dir class="row">
    <form action="{{route('category.update',['id' => $category->id])}}" method="post">
        <div class="panel panel-default">
            <div class="panel-body"  style="font-size:1.5em;">
                <div class="col-md-10">
                    <input class="form-control" type="text" name="categoryname" value="{{$category->name}}">
                </div>
                <div class="col-md-2">
                    <input type="submit" class="btn btn-lg btn-success" value="更新" >
                    <input type="hidden" name="_method" value="put" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </div>
        </div>
    </form>
</dir>

@endsection

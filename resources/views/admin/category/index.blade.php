@extends('admin.layouts.master')

@section('content')
<div class="row">
    <form action="{{route('category.store')}}" method="post">
        <div class="panel panel-default">
            <div class="panel-body"  style="font-size:1.5em;">
                <div class="col-md-11">
                    <input class="form-control" type="text" name="categoryname">
                </div>
                <div class="col-md-1">
                    <input type="submit" class="btn btn-lg btn-success" value="新增" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </div>
        </div>
    </form>
</div>

    <div class="row">


        <table class="table table-hover">
        @foreach ($categories as $category)
            <div class="panel panel-default">
                <div class="panel-body"  style="font-size:1.5em;">
                    <div class="col-md-10">
                        {{ $category->name }}
                    </div>
                    <div class="col-md-1">
                        <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-lg btn-default" >編輯</a>
                    </div>
                    <div class="col-md-1">
                        <form action="{{ route('category.destroy', ['id' => $category->id]) }}" method="post">
                            <input type="submit" value="刪除" class="btn btn-lg btn-danger" >
                            <input type="hidden" name="_method" value="delete" />
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                </div>
            </div>

        @endforeach
        </table>
    </div>

@endsection

@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <form action="{{route('partnercategory.store')}}" method="post">
            <div class="panel panel-default">
                <div class="panel-body"  style="font-size:1.5em;">
                    <div class="col-md-11">
                        <input class="form-control" type="text" name="partner_category_name">
                    </div>
                    <div class="col-md-1">
                        <input type="submit" class="btn btn-lg btn-default" value="新增" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                </div>
            </div>
        </form>
    </div>

        <div class="row">


            <table class="table table-hover">
            @foreach ($partner_categories as $partnercategory)
                <div class="panel panel-default">
                    <div class="panel-body"  style="font-size:1.5em;">
                        <div class="col-md-10">
                            {{ $partnercategory->name }}
                        </div>
                        <div class="col-md-1">
                            <a href="{{route('partnercategory.edit', ['id' => $partnercategory->id])}}" class="btn btn-lg btn-default" >編輯</a>
                        </div>
                        <div class="col-md-1">
                            <form action="{{ route('partnercategory.destroy', ['id' => $partnercategory->id]) }}" method="post">
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

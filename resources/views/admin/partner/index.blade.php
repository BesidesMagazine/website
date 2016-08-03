@extends('admin.layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-offset-11 col-md-1">
            <a class="btn btn-lg btn-default"  href="{{ route('partner.create') }}"   >新增夥伴</a>
        </div>
    </div>

    <dir class="row">
        <div class="col-md-offset-3 col-md-6">

        @foreach ($partners as $partner)
        <a style="text-decoration:none;color:black" href="{{route('partner.edit', ['id' => $partner->id])}}" >
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-5">
                        <div style="background-size: cover;background-position: center;background-image:url({{$partner->image_url}});height:150px;width:150px;">

                        </div>
                    </div>
                    <div class="col-md-7">
                        <h1>{{$partner->name}}</h1>
                    </div>

                </div>
            </div>
        </a>
        @endforeach
        </div>
    </dir>


@endsection

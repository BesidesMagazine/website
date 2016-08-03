@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <ol id="category-selector" class="breadcrumb">
                <li ><a style="font-size:1.3em;cursor:pointer" >最近</a></li>
                @foreach($categories as $category)
                    @include('admin.article._category_breadcrumbs')
                @endforeach
            </ol>
        </div>
        <div class="col-md-2">
            <a style="font-size:1.3em;" class="btn btn-default" href="/article/create"> 新增文章 </a>
        </div>
    </div>


        <div id="article-list"></div>



@endsection

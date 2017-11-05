@extends('admin.layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>{{$partner->name}}</h1>
        </div>
        <div class="col-md-1">
            <button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm">刪除夥伴</button>
        </div>
    </div>
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">你確定要刪除嗎？</h4>
          </div>
          <div class="modal-footer">
              <form action="{{ route('adminmg.partner.destroy', ['id' => $partner->id]) }}" method="post">
                <input type="submit" value="刪除" class="btn btn-danger" >
                <input type="hidden" name="_method" value="delete" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </form>
          </div>
      </div>
    </div>
</div>
    <hr>
    <form action="{{route('adminmg.partner.update',['partner' => $partner->id])}}" method="post">

        <h2>名字</h2>
        <input type="text" class="form-control" name="name" value="{{$partner->name}}" >
        <h2>介紹</h2>
        <textarea class="form-control" name="introduction"  >{{$partner->introduction}}</textarea>

         <h2>廠商分類</h2>
         <select class="form-control" name="partnercategory">
           @each('admin.partner._select_category', $partner_categories, 'partnercategory')
         </select>




        <h2>logo 圖片</h2>
        <input type="text" class="form-control" name="logo_url" value="{{$partner->logo_url}}" ></input>
        <h2>連結</h2>
        <input type="text" class="form-control" name="connect" value="{{$partner->connect}}" ></input>
        <hr>
        <input type="submit" value="更新" class="form-control" >
        <input type="hidden" name="_method" value="put" />
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </form>

@endsection

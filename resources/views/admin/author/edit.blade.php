@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>{{$author->name}}</h1>
        </div>
        <div class="col-md-1">
            <button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm">刪除作者</button>
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
              <form action="{{ route('adminmg.author.destroy', ['id' => $author->id]) }}" method="post">
                <input type="submit" value="刪除" class="btn btn-danger" >
                <input type="hidden" name="_method" value="delete" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </form>
          </div>
      </div>
    </div>
</div>


  <hr>
  <form  action="{{ route('adminmg.author.update', ['id' => $author->id]) }}" method="post" >
    <h2>作者姓名</h2>
    <input type="text" class="form-control" name="name" value="{{$author->name}}">
    <h2>作者照片</h2>
    <input type="text" class="form-control" name="image_url" value="{{$author->image_url}}">
    <hr>
    <h2>作者介紹</h2>
    <textarea class="form-control" name="introduction"  id="editor"  >{{$author->introduction}}</textarea>
    <hr>
    <input type="submit" value="更新" class="form-control" >
    <input type="hidden" name="_method" value="put" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>

@endsection

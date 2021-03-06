@extends('admin.layouts.master')

@section('content')
  <script src="/ckeditor/ckeditor.js"></script>
  <div class="row" style="font-size:36px">
      <div class="col-md-10">
          <p >
              {{$article->title}}
          </p>
      </div>
      <div class="col-md-1">
          <button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm">刪除文章</button>
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
            <form action="{{ route('adminmg.article.destroy', ['id' => $article->id]) }}" method="post">
                <input type="submit" value="刪除" class="btn btn-danger" >
                <input type="hidden" name="_method" value="delete" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
  </div>
</div>

  <hr>
  <form id="form" action="{{ route('adminmg.article.update', ['id' => $article->id]) }}" method="post" >
    <h2>分類</h2>
    <select class="form-control" form="form" name="category">
      @foreach ($categories as $category)
        @if ($category->name == $article->category_name)
          <option selected="selected">{{$category->name}}</option>
        @endif
        <option>{{$category->name}}</option>
      @endforeach
    </select>
    <h2>作者</h2>
    <select class="form-control" form="form" name="author">
      @foreach ($authors as $author)
        @if ($author->name == $article->author_name)
          <option selected="selected">{{$author->name}}</option>
        @else
            <option>{{$author->name}}</option>
        @endif

      @endforeach
    </select>
    <h2>標題</h2>
    <input type="text" class="form-control" name="title" value="{{$article->title}}" >
    <h2>預覽</h2>
    <input type="text" class="form-control" name="preview_content" value="{{$article->preview_content}}">
    <h2>預覽圖</h2>
    <input type="text" class="form-control" name="preview_image" value="{{$article->preview_image}}" >
    <hr>

    <textarea class="ckeditor" name="content" id="editor" >{{$article->content}}</textarea>
    <hr>
    <input type="submit" value="更新" class="form-control" >
    <input type="hidden" name="_method" value="put" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>
  <script>CKEDITOR.replace( 'editor' );</script>
@endsection

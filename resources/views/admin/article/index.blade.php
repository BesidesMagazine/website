@extends('admin.layouts.master')

@section('content')
    <div class="row">
      <div class="col-md-2 col-md-offset-6">
        <a class="btn btn-success"  href="{{ route('article.create') }}"   >新增文章</a>
      </div>
    </div>

    <dir class="row">
      <table class="table table-hover">

        @foreach ($articles as $article)

          <tr>
            <td>{{ $article->title }}</td>
            <td>{{ $article->category_name }}</td>
            <td>

              <form action="{{ route('article.destroy', ['id' => $article->id]) }}" method="post">
                <a href="{{route('article.edit', ['id' => $article->id])}}" class="btn btn-default" >編輯</a>
                <input type="submit" value="刪除" class="btn btn-danger" >
                <input type="hidden" name="_method" value="delete" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </form>

            </td>
          </tr>

        @endforeach

      </table>
    </dir>

@endsection

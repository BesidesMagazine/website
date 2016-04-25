@extends('admin.layouts.master')

@section('content')
	<div class="container-author">
		<dir class="author-content">
			<div class="author-title">
				<h1>
					{{$author->name}}
				</h1>
			</div>
			<hr>
			{!! $author->introduction !!}
		</dir>

		<hr>
		@foreach ($articles as $article)
          <tr>
			<td>標題：{{ $article->title }}</td>
			<td>分類：{{ $article->category_id }}</td> <br>
            <td>內容：{!! $article->content  !!}</td>
            <td></td>
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
	</div>
@endsection

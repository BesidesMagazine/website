@extends('admin.layouts.master')

@section('content')
    <div class="row">
      <div class="col-md-2 col-md-offset-6">
        <a class="btn btn-success"  href="{{ route('author.create') }}"   >新增作者</a>
      </div>
    </div>
    <dir class="row">
      <table class="table table-hover">

      @foreach ($authors as $author)
        <tr>
          <td>{{ $author->name }}</td>
          <td></td>
          <td>
            <form action="{{ route('author.destroy', ['id' => $author->id]) }}" method="post">
              <a href="{{route('author.edit', ['id' => $author->id])}}" class="btn btn-default" >編輯</a>
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

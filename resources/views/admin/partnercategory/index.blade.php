@extends('admin.layouts.master')

@section('content')

    <table class="table table-hover">
      <tr>
        <form action="{{route('partnercategory.store')}}" method="post">
        <td><input class="form-control" type="text" name="partnercategoryname"></td>
        <td></td>
        <td><input type="submit" class="btn btn-success" value="新增" ></td>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
      </tr>
       @foreach ($partner_categories as $partnercategory)
      <tr>
        <td>{{ $partnercategory->name }}</td>
        <td></td>
        <td>
            <form action="{{ route('partnercategory.destroy', ['id' => $partnercategory->id]) }}" method="post">
                <a href="{{route('partnercategory.edit', ['id' => $partnercategory->id])}}" class="btn btn-default" >編輯</a>
                <input type="submit" value="刪除" class="btn btn-danger" >
                <input type="hidden" name="_method" value="delete" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </td>
        
      </tr>
    @endforeach

   
    </table>
@endsection

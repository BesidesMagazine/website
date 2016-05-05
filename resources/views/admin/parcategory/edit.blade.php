@extends('admin.layouts.master')

@section('content')

<dir class="row">
<table class="table table-hover">
  <tr>
    <form action="{{route('parcategory.update',['id' => $parcategory->id])}}" method="post">
        <td><input class="form-control" type="text" name="parcategoryname" value="{{$parcategory->name}}"></td>
        <td></td>
        <td><input type="submit" class="btn btn-success" value="更新" ></td>
        <input type="hidden" name="_method" value="put" />
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </tr>
</table>
</dir>

@endsection

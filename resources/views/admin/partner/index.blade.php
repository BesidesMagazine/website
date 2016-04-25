@extends('admin.layouts.master')

@section('content')

    <div class="row">
      <div class="col-md-2 col-md-offset-6">
        <a class="btn btn-success"  href="{{ route('partner.create') }}"   >新增夥伴</a>
        <p></p>
      </div>
    </div>

    <table class="table table-hover">

     <tr>
      @foreach ($partners as $partner)
          <tr>
            <td>{{ $partner->name }}</td>
            <td></td>
            <td>

              <form action="{{ route('partner.destroy', ['id' => $partner->id]) }}" method="post">
                <a href="{{route('partner.edit', ['id' => $partner->id])}}" class="btn btn-default" >編輯</a>
                <input type="submit" value="刪除" class="btn btn-danger" >
                <input type="hidden" name="_method" value="delete" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </form>

            </td>
          </tr>
      @endforeach
    </tr>

    </table>


@endsection

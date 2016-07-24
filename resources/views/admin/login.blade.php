@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Login</h3>
            <form action="{{ route('authenticate') }}" method="post">
                <div class="form-group">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password" value="">
                </div>
                <button type="submit" class="btn btn-primary">submit</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
@endsection

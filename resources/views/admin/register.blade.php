@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form class="" action="{{ route('createEditor') }}" method="post">
                <div class="form-group">
                    <label for="email">Your E-mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="">
                </div>
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input class="form-control" type="text" name="name" id="name" value="">
                </div>
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

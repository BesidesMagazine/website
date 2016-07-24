<!DOCTYPE html>
<html>
    @include('admin.layouts.head')
    <body>
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>請輸入密碼</h3>
                        <form action="{{ route('authenticate') }}" method="post">
                            <div class="form-group">
                                <input class="form-control" type="password" name="password" id="password" value="">
                            </div>
                            <button type="submit" class="btn btn-primary">submit</button>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html>
    @include('admin.layouts._head')
    <body>
        <div class="container" style="margin-top:100px;">
            <div class="col-md-6 col-md-offset-3">
                <img src="/img/translogo.png" style="display:inline-block;padding:10px;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="{{ route('authenticate') }}" method="post">
                            <div class="form-group">
                                <label>請輸入密碼</label>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="password" id="password" value="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">登入</button>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

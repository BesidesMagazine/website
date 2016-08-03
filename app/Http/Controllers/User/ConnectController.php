<?php

namespace app\Http\Controllers\User;

use App\Http\Controllers\Controller;

class ConnectController extends Controller
{
    public function index()
    {
        return view('connect.index');
    }
}

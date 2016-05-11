<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ConnectController extends Controller
{
    public function index(){
        return view('connect.index');
    }
}

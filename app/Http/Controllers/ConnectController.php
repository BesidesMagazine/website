<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

class ConnectController extends Controller
{
    public function index(){
        return view('connect.index',['categories' => Category::all()]);
    }
}

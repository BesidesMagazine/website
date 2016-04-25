<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;

class AboutController extends Controller
{
    public function index(){
        return view('about.index',['categories' => Category::all()]);
    }

}

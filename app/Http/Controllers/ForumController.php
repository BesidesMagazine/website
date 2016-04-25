<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;

class ForumController extends Controller
{
    public function index(){
        return view('forum.index', ['categories' => Category::all()]);
    }
}

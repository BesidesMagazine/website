<?php

namespace app\Http\Controllers\User;

use App\Http\Controllers\Controller;

class ForumController extends Controller
{
    public function index()
    {
        return view('forum.index');
    }
}

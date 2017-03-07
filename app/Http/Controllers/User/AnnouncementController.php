<?php

namespace app\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;


class AnnouncementController extends Controller
{
    public function index()
    {


        return view('announcement.index');
    }
}

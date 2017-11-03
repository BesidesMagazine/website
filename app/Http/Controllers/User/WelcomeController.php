<?php

namespace app\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Carbon\Carbon;
use App\Models\Author;

class WelcomeController extends Controller
{
    public function index()
    {
        $today = Carbon::today();

        return view('welcome.index', ['authors' => Author::all(), 'articles' => Article::orderBy('created_at', 'desc')->get(), 'hotArticles' => Article::orderBy('click', 'desc')->where('created_at', '>', $today->subWeek())->take(5)->get()]);
    }
}

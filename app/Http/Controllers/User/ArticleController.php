<?php

namespace app\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Carbon\Carbon;

class ArticleController extends Controller
{
    public function show($title)
    {
        $article = Article::where('title', $title)->first();
        $article->click += 1;
        $article->save();
        $today = Carbon::today();

        $categories = Category::orderBy('created_at')->get();
        $hotArticles = Article::orderBy('click', 'desc')->where('created_at', '>', $today->subWeek())->take(5)->get();

        return view('article.show', ['categories' => $categories, 'article' => $article, 'hotArticles' => $hotArticles]);
    }
}

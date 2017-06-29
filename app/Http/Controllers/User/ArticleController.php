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

        $years = Article::select('created_at')
                    ->get()
                    ->groupBy(
                        function($item){
                            return $item->created_at->year;
                        })
                    ->keys();

        return view('article.show', ['years' => $years, 'categories' => $categories, 'article' => $article, 'hotArticles' => $hotArticles]);
    }

    public function year($year = '2017') {
        $article_of_year = Article::whereYear('created_at', '=', $year)->get();
        // return view('article.year', ['aricles' => $article_of_year]);
        return($article_of_year);
    }
}

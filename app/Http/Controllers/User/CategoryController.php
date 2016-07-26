<?php

namespace app\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Article;
use Carbon\Carbon;

class CategoryController extends Controller
{
    public function show($category)
    {
        if (Category::where('name', $category)->get()->isEmpty()) {
            return redirect()->route('category.index');
        }

        $today = Carbon::today();
        $articles = Article::where('category_name', $category)->orderBy('created_at', 'desc')->get();

        return view('category.list', ['articles' => $articles, 'hotArticles' => Article::orderBy('click', 'desc')->where('created_at', '>', $today->subWeek())->take(5)->get(), 'category' => $category]);
    }
}

<?php

namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Article;
use App\Category;
use App\Author;
use Auth;

class ArticleController extends Controller
{
    public function index()
    {
        return view('admin.article.index', ['articles' => Article::orderBy('category_name')->get(), 'categories' => Category::all()]);
    }

    public function create()
    {
        return view('admin.article.create', ['categories' => Category::all(), 'authors' => Author::all()]);
    }

    public function store(ArticleRequest $request)
    {
        $article = new Article();
        $article->title = $request['title'];
        $article->content = $request['content'];
        $article->preview = $request['preview'];
        $article->previewimg = $request['previewimg'];
        $article->editor()->associate(Auth::user());
        $article->category_name = $request['category'];
        $article->author_name = $request['author'];
        $article->save();

        return redirect()->route('article.index');
    }

    public function edit($id)
    {
        return view('admin.article.edit', ['categories' => Category::all(), 'authors' => Author::all(), 'article' => Article::where('id', $id)->first()]);
    }

    public function update(ArticleRequest $request, $id)
    {
        $article = Article::where('id', $id)->first();
        $article->title = $request['title'];
        $article->content = $request['content'];
        $article->preview = $request['preview'];
        $article->previewimg = $request['previewimg'];
        $article->editor()->associate(Auth::user());
        $article->category_name = $request['category'];
        $article->author_name = $request['author'];
        $article->save();

        return redirect()->route('article.index');
    }

    public function destroy($id)
    {
        Article::where('id', $id)->delete();

        return redirect()->route('article.index');
    }
}

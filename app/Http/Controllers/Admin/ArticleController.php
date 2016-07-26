<?php

namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Article;
use App\Category;
use App\Author;

class ArticleController extends Controller
{
    public function index()
    {
        return view('admin.article.index', ['articles' => Article::orderBy('category_name')->get()]);
    }

    public function create()
    {
        return view('admin.article.create', ['authors' => Author::all()]);
    }

    public function store(ArticleRequest $request)
    {
        $article = new Article();
        $this->assignArticleRequestToModel($request, $article);
        $article->save();

        return redirect()->route('article.index');
    }

    public function edit($id)
    {
        return view('admin.article.edit', ['authors' => Author::all(), 'article' => Article::where('id', $id)->first()]);
    }

    public function update(ArticleRequest $request, $id)
    {
        $article = Article::where('id', $id)->first();
        $this->assignArticleRequestToModel($request, $article);
        $article->save();

        return redirect()->route('article.index');
    }

    public function destroy($id)
    {
        Article::where('id', $id)->delete();

        return redirect()->route('article.index');
    }

    private function assignArticleRequestToModel($request, $model)
    {
        $model->title = $request['title'];
        $model->content = $request['content'];
        $model->preview_content = $request['preview_content'];
        $model->preview_image = $request['preview_image'];
        $model->category_name = $request['category'];
        $model->author_name = $request['author'];
    }
}

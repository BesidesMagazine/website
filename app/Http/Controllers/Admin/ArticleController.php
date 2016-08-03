<?php

namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\GetArticlesRequest;
use App\Repositories\ArticleRepository;
use App\Models\Article;
use App\Models\Author;

class ArticleController extends Controller
{
    protected $articles;

    public function __construct(ArticleRepository $articles)
    {
        $this->articles = $articles;
    }

    public function index()
    {
        return view('admin.article.index');
    }

    public function create()
    {
        return view('admin.article.create', ['authors' => Author::all()]);
    }

    public function store(ArticleRequest $request)
    {
        $this->articles->store($request);

        return redirect()->route('article.index');
    }

    public function edit(Article $article)
    {
        return view('admin.article.edit', ['authors' => Author::all(), 'article' => $article]);
    }

    public function update(ArticleRequest $request, $id)
    {
        $this->articles->update($request, $id);

        return redirect()->route('article.index');
    }

    public function destroy($id)
    {
        $this->articles->destory($id);

        return redirect()->route('article.index');
    }

    public function getArticles(GetArticlesRequest $request)
    {
        return $this->articles->getArticles($request->input('take'), $request->input('category'))->toArray();
    }
}

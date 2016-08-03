<?php

namespace app\Repositories;

use App\Models\Article;

class ArticleRepository
{
    public function store($request)
    {
        $article = new Article();
        $this->assignArticleRequestToModel($request, $article);
        $article->save();
    }

    public function update($request, $id)
    {
        $article = Article::where('id', $id)->first();
        $this->assignArticleRequestToModel($request, $article);
        $article->save();
    }

    public function destory($id)
    {
        Article::where('id', $id)->delete();
    }

    public function getArticles($take, $category)
    {
        if ($category == null) {
            return Article::orderBy('created_at', 'desc')->take($take)->get();
        }

        return Article::where('category_name', $category)->orderBy('created_at', 'desc')->take($take)->get();
    }

    private function assignArticleRequestToModel($request, $model)
    {
        $model->title = $request->input('title');
        $model->content = $request->input('content');
        $model->preview_content = $request->input('preview_content');
        $model->preview_image = $request->input('preview_image');
        $model->category_name = $request->input('category');
        $model->author_name = $request->input('author');
    }
}

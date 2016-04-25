<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\Category;
use App\Author;
use Validator;
use Auth;
use Carbon\Carbon;

class ArticleController extends Controller{

    public function index(){
        return view('admin.article.index', ['articles' => Article::orderBy('category_name')->get(), 'categories' => Category::all()]);
    }

    public function create(){
        return view('admin.article.create',['categories' => Category::all(), 'authors' => Author::all() ]);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
            'preview' => 'required',
            'previewimg' => 'required',
            'author' => 'required',
        ]);
        if ($validator->fails()) {
           return  back()->withErrors($validator)->withInput();
        } else {
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
    }

    public function edit($id){
        return view('admin.article.edit', ['categories' => Category::all(), 'authors' => Author::all(), 'article' => Article::where('id', $id)->first()]);
    }

    public function update(Request $request, $id){

        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
            'preview' => 'required',
            'previewimg' => 'required',
            'author' => 'required',
        ]);

        if ($validator->fails()) {
           return  back()->withErrors($validator)->withInput();
        } else {
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
    }

    public function destroy($id){
        Article::where('id', $id)->delete();
        return redirect()->route('article.index');
    }

    public function articleShow($category, $name){
        $article = Article::where('title', $name)->first();
        $article->click += 1;
        $article->save();
        $today = Carbon::today();
        return view('article.show',['categories' => Category::orderBy('created_at')->get(), 'article' => $article, 'hotArticles' => Article::orderBy('click', 'desc')->where('created_at', '>', $today->subWeek())->take(5)->get()]);
    }
}

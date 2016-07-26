<?php

namespace app\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Article;

class AuthorController extends Controller
{
    public function index()
    {
        return view('author.index', ['authors' => Author::all()]);
    }

    public function show($author_name)
    {
        $author = Author::where('name', $author_name)->first();

        return view('author.show', ['author' => $author, 'articles' => Article::where('author_name', $author_name)->get()]);
    }
}

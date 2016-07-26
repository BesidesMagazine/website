<?php

namespace app\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\Author;
use App\Models\Article;

class AuthorController extends Controller
{
    public function index()
    {
        return view('admin.author.index', ['authors' => Author::all()]);
    }

    public function create()
    {
        return view('admin.author.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
          'name' => 'required',
          'image_url' => 'required',
          'introduction' => 'required',
      ]);
        if ($validator->fails()) {
            return  back()->withErrors($validator)->withInput();
        } else {
            $author = new Author();
            $author->name = $request['name'];
            $author->introduction = $request['introduction'];
            $author->image_url = $request['image_url'];
            $author->save();

            return redirect()->route('author.index');
        }
    }

    public function show($id)
    {
        return view('author.show', ['author' => Author::where('id', $id)->first(), 'articles' => Article::where('author_id', $id)->get()]);
    }

    public function edit($id)
    {
        return view('admin.author.edit', ['author' => Author::where('id', $id)->first()]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
          'name' => 'required',
          'image_url' => 'required',
          'introduction' => 'required',
      ]);
        if ($validator->fails()) {
            return  back()->withErrors($validator)->withInput();
        } else {
            $author = Author::where('id', $id)->first();
            $author->name = $request['name'];
            $author->introduction = $request['introduction'];
            $author->image_url = $request['image_url'];
            $author->save();

            return redirect()->route('author.index');
        }
    }

    public function destroy($id)
    {
        Author::where('id', $id)->delete();

        return redirect()->route('author.index');
    }
}

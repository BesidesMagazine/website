<?php

namespace app\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Validator;
use App\Models\Article;
use Carbon\Carbon;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index', ['categories' => Category::all()]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'categoryname' => 'required|unique:categories,name',
        ]);
        if ($validator->fails()) {
            return  redirect()->route('category.index')->withErrors($validator);
        } else {
            $category = new Category();
            $category->name = $request['categoryname'];
            $category->save();

            return redirect()->route('category.index');
        }
    }

    public function edit($id)
    {
        return view('admin.category.edit', ['category' => Category::where('id', $id)->first()]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'categoryname' => 'required|unique:categories,name',
        ]);
        if ($validator->fails()) {
            return  back()->withErrors($validator);
        } else {
            $category = Category::where('id', $id)->first();
            $category->name = $request['categoryname'];
            $category->save();

            return redirect()->route('category.index');
        }
    }

    public function destroy($id)
    {
        Category::where('id', $id)->delete();

        return redirect()->route('category.index');
    }

    public function listArticles($category)
    {
        if (Category::where('name', $category)->get()->isEmpty()) {
            return redirect()->route('category.index');
        }

        $today = Carbon::today();
        $articles = Article::where('category_name', $category)->orderBy('created_at', 'desc')->get();

        return view('category.list', ['articles' => $articles, 'hotArticles' => Article::orderBy('click', 'desc')->where('created_at', '>', $today->subWeek())->take(5)->get(), 'category' => $category]);
    }
}

<?php

namespace app\Http\ViewComposers;

use Illuminate\View\View;
use App\Category;

class CategoryComposer
{
    protected $categories;

    public function __construct()
    {
        $this->categories = Category::all();
    }

    public function compose(View $view)
    {
        $view->with('categories', $this->categories);
    }
}

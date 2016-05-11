<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Category;

class CategoryComposer{

    protected $categories;


    public function __construct()
    {
    $this->categories = Category::all();
    }

    function compose(View $view){
        $view->with('categories', $this->categories);
    }

}

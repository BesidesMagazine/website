<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Article;
use Carbon\Carbon;

class WelcomeController extends Controller{
	public function index(){
		$today = Carbon::today();
    	return view('welcome.index', [ 'articles' => Article::orderBy('created_at', 'desc')->get(), 'hotArticles' => Article::orderBy('click', 'desc')->where('created_at', '>', $today->subWeek())->take(5)->get()]);
    }
}

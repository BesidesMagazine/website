<?php

$domain = substr(env('APP_URL'), 7); //hard code


Route::group(['domain' => 'admin.' . $domain], function(){

	Route::get('/',['as' => 'admin', 'uses' => 'Admin\AdminController@index']);

	Route::get('login', ['as' => 'login', 'uses' => 'Admin\AdminController@login']);

	Route::get('register', ['as' => 'register', 'uses' => 'Admin\AdminController@register']);

	Route::post('authenticate', ['as' => 'authenticate', 'uses' =>  'Admin\AdminController@authenticate']);

	Route::post('createEditor', ['as' => 'createEditor', 'uses' => 'Admin\AdminController@createEditor']);

	Route::get('logout', ['as' => 'logout', 'uses' => 'Admin\AdminController@logout']);

	Route::group(['middleware' => 'auth'], function(){

		Route::resource('article', 'ArticleController');

		Route::resource('category', 'CategoryController');

		Route::resource('author', 'AuthorController');

		Route::resource('partner', 'PartnerController');

		Route::resource('parcategory', 'ParcategoryController');

	});

});

Route::group(['domain' => $domain], function(){

	Route::get('/', 'WelcomeController@index')->name('welcome');

	Route::group(['prefix' => 'authors'],function(){

		Route::get('/', 'AuthorController@listAuthors')->name('authors');

		Route::get('{author}', 'AuthorController@showAuthor')->name('author');

	});

	Route::get('connect','ConnectController@index')->name('connect');

	Route::get('forum', 'ForumController@index')->name('forum');

	Route::get('about', 'AboutController@index')->name('about');

	Route::get('partners', 'PartnerController@listPartners')->name('partners');

	Route::group(['prefix' => '{category}'], function(){

		Route::get('/','CategoryController@listArticles')->name('category');

		Route::get('{article}', 'ArticleController@articleShow')->name('article');

	});



});

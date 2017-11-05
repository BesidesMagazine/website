<?php

// $domainName = explode('://', env('APP_URL'))[1];

// Route::group(['domain' => 'admin.'.$domainName], function () {
  Route::get('login', ['as' => 'login', 'uses' => 'Admin\AdminController@login']);
  Route::post('authenticate', ['as' => 'authenticate', 'uses' => 'Admin\AdminController@authenticate']);

  Route::get('logout', ['as' => 'logout', 'uses' => 'Admin\AdminController@logout']);
  Route::group(['prefix'=>'adminmg'], function () {

    Route::get('/', ['as' => 'admin', 'uses' => 'Admin\AdminController@index']);




    Route::group(['middleware' => 'auth'], function () {

        Route::get('getArticles', 'Admin\ArticleController@getArticles');

        Route::resource('article', 'Admin\ArticleController');

        Route::resource('category', 'Admin\CategoryController');

        Route::resource('author', 'Admin\AuthorController');

        Route::resource('partner', 'Admin\PartnerController');

        Route::resource('partnercategory', 'Admin\PartnerCategoryController');

    });

});

Route::resource('/', 'User\WelcomeController', ['only' => ['index']]);

Route::resource('author', 'User\AuthorController', ['only' => ['index', 'show']]);

Route::resource('connect', 'User\ConnectController', ['only' => ['index']]);

Route::get('forum', 'User\ForumController@index')->name('forum');

Route::resource('about', 'User\AboutController', ['only' => ['index']]);

Route::resource('partner', 'User\PartnerController', ['only' => ['index']]);

Route::resource('category', 'User\CategoryController', ['only' => ['show']]);

Route::get('article/year/{year}',['as' => 'article.year', 'uses' => 'User\ArticleController@year']);
Route::resource('article', 'User\ArticleController', ['only' => ['show', 'year']]);

Route::resource('announcement', 'User\announcementController', ['only' => ['index']]);

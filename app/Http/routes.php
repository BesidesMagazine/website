<?php

$domain = substr(env('APP_URL'), 7); //hard code

Route::group(['domain' => 'admin.'.$domain], function () {

    Route::get('/', ['as' => 'admin', 'uses' => 'Admin\AdminController@index']);

    Route::get('login', ['as' => 'login', 'uses' => 'Admin\AdminController@login']);

    Route::get('register', ['as' => 'register', 'uses' => 'Admin\AdminController@register']);

    Route::post('authenticate', ['as' => 'authenticate', 'uses' => 'Admin\AdminController@authenticate']);

    Route::post('createEditor', ['as' => 'createEditor', 'uses' => 'Admin\AdminController@createEditor']);

    Route::get('logout', ['as' => 'logout', 'uses' => 'Admin\AdminController@logout']);

    Route::group(['middleware' => 'auth'], function () {

        Route::resource('article', 'Admin\ArticleController');

        Route::resource('category', 'Admin\CategoryController');

        Route::resource('author', 'Admin\AuthorController');

        Route::resource('partner', 'Admin\PartnerController');

        Route::resource('partnercategory', 'Admin\PartnerCategoryController');

    });

});

Route::group(['domain' => $domain], function () {

    Route::resource('/', 'User\WelcomeController', ['only' => ['index']]);

    Route::resource('author', 'User\AuthorController', ['only' => ['index', 'show']]);

    Route::resource('connect', 'User\ConnectController', ['only' => ['index']]);

    Route::get('forum', 'User\ForumController@index')->name('forum');

    Route::resource('about', 'User\AboutController', ['only' => ['index']]);

    Route::resource('partner', 'User\PartnerController', ['only' => ['index']]);

    Route::resource('category', 'User\CategoryController', ['only' => ['show']]);

    Route::resource('article', 'User\ArticleController', ['only' => ['show']]);

});

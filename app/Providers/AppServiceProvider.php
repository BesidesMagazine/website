<?php

namespace app\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        view()->composer(
            ['welcome.index', 'layouts.master', 'admin.article.index', 'admin.article.create', 'admin.article.edit'], 'App\Http\ViewComposers\CategoryComposer'
        );
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}

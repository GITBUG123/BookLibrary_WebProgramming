<?php

namespace App\Providers;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        view()->share('categoriesData', Category::all());
        view()->share('publishersData', Publisher::all());
        view()->share('bookcategory', BookCategory::all());
    }
}

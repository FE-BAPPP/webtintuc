<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\EmailNotification;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }


    //take 5 oldest categories for header
    public function boot()
    {
        View::composer('*', function ($view) {
        // Categories (giữ nguyên)
            $view->with('headerCategories', Category::orderBy('created_at', 'asc')->limit(5)->get());

        });
    }
}

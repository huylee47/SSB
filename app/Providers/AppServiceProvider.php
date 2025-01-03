<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Config;
use App\Models\Course;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $courses = Course::all();
        $blogs = Blog::all();
        $config = Config::first();
        View::share('config', $config);
        View::share('courses', $courses);
        View::share('blogs', $blogs);
    }
}

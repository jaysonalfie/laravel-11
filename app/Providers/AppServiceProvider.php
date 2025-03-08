<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
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
     * configuring the application how you want it
     */
    public function boot(): void
    {
        //prevents lazy loading
        Model::preventLazyLoading();
    }
}

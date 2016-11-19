<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerDevelopment();
    }

    /**
     * Register for development environment
     *
     * @return void
     */
    public function registerDevelopment()
    {
        if (\Config::get('app.debug')) {
            app()->register(\Barryvdh\Debugbar\ServiceProvider::class);
        }
    }
}

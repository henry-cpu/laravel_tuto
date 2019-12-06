<?php

namespace App\Providers;

use App\ImageGestion\ImageGestionInterface;
use App\ImageGestion\ImageManager;
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
        $this->app->bind(
            ImageGestionInterface::class,
            ImageManager::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

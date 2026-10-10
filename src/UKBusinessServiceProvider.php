<?php

namespace JamesForsyth\UKBusiness;

use Illuminate\Support\ServiceProvider;

class UKBusinessServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('uk-business', function ($app) {
            return new UKBusinessClient();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Service provider boot logic
    }
}
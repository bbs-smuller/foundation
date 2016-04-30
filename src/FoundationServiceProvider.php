<?php

namespace Igniweb\Foundation;

use Illuminate\Support\ServiceProvider;

class FoundationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'foundation');

        $this->publishes([
            __DIR__ . '/../views' => resource_path('views/vendor/foundation')
        ], 'views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/../routes.php';

        //$this->app->make(Controllers\Backend\AuthController::class);
    }
}

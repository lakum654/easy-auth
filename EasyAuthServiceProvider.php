<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EasyAuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Load migrations
        $this->loadViewsFrom(__DIR__ . '/views', 'easy-auth');

        // Publish migrations
        $this->publishes([
            __DIR__ . '/view' => resource_path('views/easy-auth'),
            __DIR__ . '/Controllers' => app_path('Http/Controllers'),
            __DIR__ . '/Traits' => app_path('Http/Traits'),
        ], 'easy-auth');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

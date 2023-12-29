<?php

namespace Lakum\EasyAuth;

use Illuminate\Support\ServiceProvider;

class EasyAuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

        $this->publishes([
            // From Path                  To Path
            __DIR__ . '/views' => resource_path('views/easy-auth'),
            __DIR__ . '/Controllers' => app_path('Http/Controllers'),
            __DIR__ . '/Traits' => app_path('Traits'),
        ], 'easy-auth');

        $this->publishes([
            __DIR__ . '/views' => resource_path('views/easy-auth'),
        ], 'easy-auth-views');

        $this->publishes([
            __DIR__ . '/Controllers' => app_path('Http/Controllers'),
        ], 'easy-auth-controllers');

        $this->publishes([
            __DIR__ . '/Traits' => app_path('Traits'),
        ], 'easy-auth-traits');

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

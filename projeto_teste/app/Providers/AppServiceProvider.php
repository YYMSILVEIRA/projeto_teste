<?php

namespace App\Providers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
        /*DB::listen(function ($query) {
            // Loga a query no arquivo de log
            Log::debug("Query: {$query->sql}");
            Log::debug("Bindings: " . implode(', ', $query->bindings));
            Log::debug("Time: {$query->time} ms");
        });*/
    }
}

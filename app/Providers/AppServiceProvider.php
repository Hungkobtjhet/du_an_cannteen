<?php

namespace App\Providers;

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
        if($this->app->environment('Production')) {
            $this->app['request']->server->set('HTTPS', true);
        }
        /*DB::listen(function ($query) {
            // Log the SQL query, bindings, and execution time
            $fullSql = vsprintf(str_replace(['%', '?'], ['%%', '%s'], $query->sql), $query->bindings);
            // Log the full query with the interpolated bindings
            Log::info("Executed query: $fullSql, Time: {$query->time}ms");
        });*/
    }
}

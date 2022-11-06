<?php

namespace BinanceApi;

use BinanceApi\Commands\GetTickers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class MasteringNovaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->importMigrations();
        $this->registerCommands();
        $this->loadRoutes();
        $this->loadViews();
    }

    protected function loadViews()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'course');
    }

    protected function loadRoutes()
    {
        /*
        Route::middleware(['web'])
             ->group(function () {
                 include __DIR__.'/../routes/web.php';
             });
        */
    }

    public function register()
    {
        Schema::defaultStringLength(191);
    }

    protected function importMigrations(): void
    {
        //$this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    protected function registerCommands(): void
    {
        $this->commands([
            //GetTickers::class,
        ]);
    }
}

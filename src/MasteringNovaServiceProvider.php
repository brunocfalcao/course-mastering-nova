<?php

namespace MasteringNova;

use Illuminate\Support\ServiceProvider;

class MasteringNovaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'course');
    }

    public function register()
    {
        //
    }
}

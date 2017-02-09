<?php

namespace Stevens\Core;

use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'\CoreConfig.php' => config_path('core_config.php')
        ], "config");
        
        $this->publishes([
            __DIR__.'/Migrations/' => database_path('migrations')
        ], "migrations");
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}

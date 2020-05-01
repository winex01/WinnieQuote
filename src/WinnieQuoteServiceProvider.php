<?php

namespace Winnie\WinnieQuote;

use Illuminate\Support\ServiceProvider;

class WinnieQuoteServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'winnie');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'winnie');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/winniequote.php', 'winniequote');

        // Register the service the package provides.
        $this->app->singleton('winniequote', function ($app) {
            return new WinnieQuote;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['winniequote'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/winniequote.php' => config_path('winniequote.php'),
        ], 'winniequote.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/winnie'),
        ], 'winniequote.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/winnie'),
        ], 'winniequote.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/winnie'),
        ], 'winniequote.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}

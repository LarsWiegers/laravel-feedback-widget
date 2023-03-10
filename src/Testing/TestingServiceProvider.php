<?php

namespace Larswiegers\LaravelFeedbackWidget\Testing;

use Illuminate\Support\ServiceProvider;
use Larswiegers\LaravelFeedbackWidget\Components\Widget;
use Larswiegers\LaravelFeedbackWidget\LaravelFeedbackWidget;

class TestingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-translations-checker');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-translations-checker');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
         $this->loadRoutesFrom(__DIR__.'/testing.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-feedback-widget.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-translations-checker'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravel-translations-checker'),
            ], 'assets');*/

            // Publishing the translation files.

            // Registering package commands.
        }

        $this->loadViewComponentsAs('feedback', [Widget::class]);
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'widgets');
        $this->loadViewsFrom(__DIR__.'/../resources/testing', 'testing');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../../config/config.php', 'laravel-feedback-widget');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-feedback-widget', function () {
            return new LaravelFeedbackWidget;
        });
    }
}

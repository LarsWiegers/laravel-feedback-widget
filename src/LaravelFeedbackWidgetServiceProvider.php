<?php

namespace Larswiegers\LaravelFeedbackWidget;

use Illuminate\Support\ServiceProvider;
use Larswiegers\LaravelFeedbackWidget\Components\FeedbackWidget;

class LaravelFeedbackWidgetServiceProvider extends ServiceProvider
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
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

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
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-translations-checker'),
            ], 'lang');*/

            $this->loadViewComponentsAs('feedback', [
                'widget' => FeedbackWidget::class,
            ]);

            $this->loadViewsFrom(__DIR__.'/../resources/views', 'widgets');

            // Registering package commands.
             $this->commands([
             ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-feedback-widget');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-feedback-widget', function () {
            return new LaravelFeedbackWidget;
        });
    }
}

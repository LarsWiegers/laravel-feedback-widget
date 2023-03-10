<?php

namespace Larswiegers\LaravelFeedbackWidget\Tests\Browser;

use Carbon\Traits\Options;
use Laravel\Dusk\Browser;
use Orchestra\Testbench\Dusk\TestCase;

class BasicTest extends TestCase
{
    protected function defineWebRoutes($router)
    {
        $router->get('/test', function() {
           return 'test';
        });
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array<int, class-string<\Illuminate\Support\ServiceProvider>>
     */
    protected function getPackageProviders($app)
    {
        return [
            'Larswiegers\LaravelFeedbackWidget\LaravelFeedbackWidgetServiceProvider',
            'Larswiegers\LaravelFeedbackWidget\Testing\TestingServiceProvider',
        ];
    }

    /**
     * @throws \Throwable
     */
    public function test_it_can_load() {
        \Orchestra\Testbench\Dusk\Options::addArgument('--remote-debugging-port=9222');
        \Orchestra\Testbench\Dusk\Options::headless();
        $this->browse(function(Browser $browser) {
            $browser->visit('/test')->screenshot('test');
        });
    }
}

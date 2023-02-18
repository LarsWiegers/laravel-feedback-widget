<?php

declare(strict_types=1);

namespace Tests;

use Larswiegers\LaravelFeedbackWidget\LaravelFeedbackWidgetServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelFeedbackWidgetServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}

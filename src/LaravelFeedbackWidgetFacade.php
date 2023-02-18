<?php

namespace Larswiegers\LaravelFeedbackWidget;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Larswiegers\LaravelFeedbackWidget\Skeleton\SkeletonClass
 */
class LaravelFeedbackWidgetFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-feedback-widget';
    }
}

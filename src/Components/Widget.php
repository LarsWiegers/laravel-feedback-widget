<?php

namespace Larswiegers\LaravelFeedbackWidget\Components;

use Illuminate\Support\Facades\File;
use Illuminate\View\Component;
use Illuminate\View\View;

class Widget extends Component
{

    public function __construct()
    {

    }

    public function render() : View
    {

        return view('widgets::components.widget', [
            'primaryColor' => config('laravel-feedback-widget.primary-color'),
            'secondaryColor' => config('laravel-feedback-widget.secondary-color'),
        ]);
    }
}

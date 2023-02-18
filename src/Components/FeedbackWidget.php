<?php

namespace Larswiegers\LaravelFeedbackWidget\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\View\View;

class FeedbackWidget extends Component
{

    public function __construct()
    {

    }

    public function render() : View
    {

        return view('widgets::components.widget', []);
    }
}

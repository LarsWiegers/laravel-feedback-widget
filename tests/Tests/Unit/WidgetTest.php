<?php

declare(strict_types=1);

namespace Tests\Unit;

use Tests\InteractsWithViews;
use Tests\TestCase;

final class WidgetTest extends TestCase
{
    use InteractsWithViews;

    public function test_it_renders()
    {
        $content = $this->getComponentRenderedContent('<x-feedback-widget />');
        $this->assertStringContainsString('test', $content);
    }
}

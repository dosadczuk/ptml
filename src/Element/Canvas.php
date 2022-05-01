<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * Use the HTML <canvas> element with either the canvas scripting API or
 * the WebGL API to draw graphics and animations.
 */
class Canvas extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Canvas, $text);
    }
}

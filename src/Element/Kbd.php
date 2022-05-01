<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <kbd> HTML element represents a span of inline text denoting textual
 * user input from a keyboard, voice input, or any other text entry device.
 */
class Kbd extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Kbd, $text);
    }
}

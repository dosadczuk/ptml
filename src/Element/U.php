<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <u> HTML element represents a span of inline text which should be
 * rendered in a way that indicates that it has a non-textual annotation.
 */
class U extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::U, $text);
    }
}

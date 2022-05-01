<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <mark> HTML element represents text which is marked or highlighted
 * for reference or notation purposes, due to the marked passage's
 * relevance or importance in the enclosing context.
 */
class Mark extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Mark, $text);
    }
}

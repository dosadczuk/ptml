<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <figure> HTML element represents self-contained content, potentially
 * with an optional caption, which is specified using the figcaption
 * element. The figure, its caption, and its contents are referenced as a
 * single unit.
 */
class Figure extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Figure, $text);
    }
}

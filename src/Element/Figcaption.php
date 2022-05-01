<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <figcaption> HTML element represents a caption or legend describing
 * the rest of the contents of its parent figure element.
 */
class Figcaption extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Figcaption, $text);
    }
}

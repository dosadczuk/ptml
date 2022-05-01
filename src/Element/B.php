<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <b> HTML element is used to draw the reader's attention to the
 * element's contents, which are not otherwise granted special importance.
 */
class B extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::B, $text);
    }
}

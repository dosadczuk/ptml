<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <sub> HTML element specifies inline text which should be displayed
 * as subscript for solely typographical reasons. Subscripts are typically
 * rendered with a lowered baseline using smaller text.
 */
class Sub extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Sub, $text);
    }
}

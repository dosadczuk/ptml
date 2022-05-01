<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <rp> HTML element is used to provide fall-back parentheses for
 * browsers that do not support display of ruby annotations using the ruby
 * element. One <rp> element should enclose each of the opening and closing
 * parentheses that wrap the rt element that contains the annotation's
 * text.
 */
class Rp extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Rp, $text);
    }
}

<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <sup> HTML element specifies inline text which is to be displayed as
 * superscript for solely typographical reasons. Superscripts are usually
 * rendered with a raised baseline using smaller text.
 */
class Sup extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Sup, $text);
    }
}

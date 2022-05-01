<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <pre> HTML element represents preformatted text which is to be
 * presented exactly as written in the HTML file. The text is typically
 * rendered using a non-proportional, or monospaced, font. Whitespace
 * inside this element is displayed as written.
 */
class Pre extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Pre, $text);
    }
}

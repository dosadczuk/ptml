<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <html> HTML element represents the root (top-level element) of an
 * HTML document, so it is also referred to as the root element. All other
 * elements must be descendants of this element.
 */
class Html extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Html, $text);
    }
}

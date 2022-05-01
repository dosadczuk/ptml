<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <body> HTML element represents the content of an HTML document.
 */
class Body extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Body, $text);
    }
}

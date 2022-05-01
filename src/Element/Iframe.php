<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <iframe> HTML element represents a nested browsing context,
 * embedding another HTML page into the current one.
 */
class Iframe extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Iframe, $text);
    }
}

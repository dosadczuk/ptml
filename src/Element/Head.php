<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <head> HTML element contains machine-readable information (metadata)
 * about the document, like its title, scripts, and style sheets.
 */
class Head extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Head, $text);
    }
}

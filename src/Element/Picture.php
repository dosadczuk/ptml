<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <picture> HTML element contains zero or more source elements and one
 * img element to offer alternative versions of an image for different
 * display/device scenarios.
 */
class Picture extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Picture, $text);
    }
}

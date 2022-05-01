<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <map> HTML element is used with area elements to define an image map
 * (a clickable link area).
 */
class Map extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Map, $text);
    }
}

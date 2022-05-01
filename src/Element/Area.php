<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <area> HTML element defines an area inside an image map that has
 * predefined clickable areas. An image map allows geometric areas on an
 * image to be associated with Hyperlink.
 */
class Area extends Element
{
    public function __construct()
    {
        parent::__construct(Tag::Area);
    }
}

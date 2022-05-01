<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <img> HTML element embeds an image into the document.
 */
class Img extends Element
{
    public function __construct()
    {
        parent::__construct(Tag::Img);
    }
}

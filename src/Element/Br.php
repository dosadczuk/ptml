<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <br> HTML element produces a line break in text (carriage-return).
 */
class Br extends Element
{
    public function __construct()
    {
        parent::__construct(Tag::Br);
    }
}

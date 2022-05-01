<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <th> HTML element defines a cell as header of a group of table
 * cells. The exact nature of this group is defined by the scope and
 * headers attributes.
 */
class Th extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Th, $text);
    }
}

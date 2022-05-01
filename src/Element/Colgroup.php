<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <colgroup> HTML element defines a group of columns within a table.
 */
class Colgroup extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Colgroup, $text);
    }
}

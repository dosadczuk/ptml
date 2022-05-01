<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <caption> HTML element specifies the caption (or title) of a table.
 */
class Caption extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Caption, $text);
    }
}

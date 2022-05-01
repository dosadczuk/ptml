<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <tfoot> HTML element defines a set of rows summarizing the columns
 * of the table.
 */
class Tfoot extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Tfoot, $text);
    }
}

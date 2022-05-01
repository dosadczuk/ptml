<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <tr> HTML element defines a row of cells in a table. The row's cells
 * can then be established using a mix of td (data cell) and th (header
 * cell) elements.
 */
class Tr extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Tr, $text);
    }
}

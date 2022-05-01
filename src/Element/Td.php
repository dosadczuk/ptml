<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <td> HTML element defines a cell of a table that contains data. It
 * participates in the table model.
 */
class Td extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Td, $text);
    }
}

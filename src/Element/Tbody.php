<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <tbody> HTML element encapsulates a set of table rows (tr elements),
 * indicating that they comprise the body of the table (table).
 */
class Tbody extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Tbody, $text);
    }
}

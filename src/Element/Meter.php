<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <meter> HTML element represents either a scalar value within a known
 * range or a fractional value.
 */
class Meter extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Meter, $text);
    }
}

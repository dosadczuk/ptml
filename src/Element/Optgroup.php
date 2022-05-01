<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <optgroup> HTML element creates a grouping of options within a
 * select element.
 */
class Optgroup extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Optgroup, $text);
    }
}

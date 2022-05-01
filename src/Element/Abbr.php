<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <abbr> HTML element represents an abbreviation or acronym; the
 * optional title attribute can provide an expansion or description for the
 * abbreviation. If present, title must contain this full description and
 * nothing else.
 */
class Abbr extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Abbr, $text);
    }
}

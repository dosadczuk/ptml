<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <dl> HTML element represents a description list. The element
 * encloses a list of groups of terms (specified using the dt element) and
 * descriptions (provided by dd elements). Common uses for this element are
 * to implement a glossary or to display metadata (a list of key-value
 * pairs).
 */
class Dl extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Dl, $text);
    }
}

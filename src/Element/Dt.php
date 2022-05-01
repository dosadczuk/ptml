<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <dt> HTML element specifies a term in a description or definition
 * list, and as such must be used inside a dl element. It is usually
 * followed by a dd element; however, multiple <dt> elements in a row
 * indicate several terms that are all defined by the immediate next dd
 * element.
 */
class Dt extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Dt, $text);
    }
}

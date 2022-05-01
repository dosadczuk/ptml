<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <dfn> HTML element is used to indicate the term being defined within
 * the context of a definition phrase or sentence. The p element, the dt/dd
 * pairing, or the section element which is the nearest ancestor of the
 * <dfn> is considered to be the definition of the term.
 */
class Dfn extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Dfn, $text);
    }
}

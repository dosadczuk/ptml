<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <s> HTML element renders text with a strikethrough, or a line
 * through it. Use the <s> element to represent things that are no longer
 * relevant or no longer accurate. However, <s> is not appropriate when
 * indicating document edits; for that, use the del and ins elements, as
 * appropriate.
 */
class S extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::S, $text);
    }
}

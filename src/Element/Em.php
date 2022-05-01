<?php
declare(strict_types=1);

namespace PTML\Element;

use PTML\{Element, Tag};

/**
 * The <em> HTML element marks text that has stress emphasis. The <em>
 * element can be nested, with each level of nesting indicating a greater
 * degree of emphasis.
 */
class Em extends Element
{
    public function __construct(\Stringable|string $text = '')
    {
        parent::__construct(Tag::Em, $text);
    }
}
